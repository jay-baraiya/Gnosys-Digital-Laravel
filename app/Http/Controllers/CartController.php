<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Country;
use App\Models\DigitalProduct;
use App\Models\DigitalService;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{

    public function index(Request $request)
    {
        $id = Auth::id();

        $carts = collect();
        $grandTotal = 0;

        if ($id) {
            $carts = Cart::query()->where('user_id', $id)->get();
            $grandTotal = Cart::query()->where('user_id', $id)->sum('total_amount');
        } else {
            $sessionCarts = session()->get('cart', []);
            foreach ($sessionCarts as $item) {

                $cartItem = (object) [
                    'product_id'    => $item['id'],
                    'product_title' => $item['title'],
                    'package_id' => $item['package_id'],
                    'package_name' => $item['package_name'],
                    'product_img'   => $item['image'],
                    'product_type'  => $item['type'],
                    'product_price' => $item['price'],
                    'product_qty'   => $item['qty'],
                    'total_amount'   => $item['qty'] * $item['price'],
                ];

                $carts->push($cartItem);
                $grandTotal += ($item['price'] * $item['qty']);
            }
        }

        return view('cart', compact('carts', 'grandTotal'));
    }

    public function checkoutIndex(Request $request) {
        $id = Auth::id();

        $countrys = Country::all();

        $carts = collect();
        $grandTotal = 0;

        if ($id) {
            $carts = Cart::query()->where('user_id', $id)->get();
            $grandTotal = Cart::query()->where('user_id', $id)->sum('total_amount');
        } else {
            $sessionCarts = session()->get('cart', []);

            $price = 0;
            foreach ($sessionCarts as $item) {

                $cartItem = (object) [
                    'product_id'    => $item['id'],
                    'product_title' => $item['title'],
                    'package_id' => $item['package_id'],
                    'package_name' => $item['package_name'],
                    'product_img'   => $item['image'],
                    'product_type'  => $item['type'],
                    'product_price' => $item['price'],
                    'product_qty'   => $item['qty'],
                    'total_amount'   => $item['qty'] * $item['price'],
                ];

                $carts->push($cartItem);
                $grandTotal += ($item['price'] * $item['qty']);
            }
        }

        return view('checkout', compact('carts', 'grandTotal', 'countrys'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'product_type' => 'required',
            'quantity'   => 'required|integer|min:1',
        ]);

        $type = $request->product_type;
        try {
            $realProductId = decrypt($request->product_id);
            $product_package_id = decrypt($request->package_id) ?? null;
        } catch (DecryptException $e) {
            return response()->json(['error' => 'Invalid product data.'], 400);
        }

        $authUser = Auth::id();

        if ($authUser) {
            $updated = Cart::query()
                ->where('user_id', $authUser)
                ->where('product_id', $realProductId)
                ->where('product_type', $type)
                ->when(!empty($product_package_id), function($q) use ($product_package_id) {
                    $q->where('package_id', $product_package_id);
                })
                ->first();

            if ($updated) {
                $updated->update([
                    'product_qty' => $request->quantity,
                    'total_amount' => $request->quantity * $updated->product_price
                ]);
            }

            if ($updated) {
                return response()->json([
                    'success' => true,
                    'message' => 'Cart updated successfully.',
                ], 200);
            }

            return response()->json(['error' => 'Item not found in cart.'], 404);

        } else {
            $cart = session()->get('cart', []);

            $cartKey = $type . '_' . $realProductId . (!empty($product_package_id) ? '_' . $product_package_id : '');

            if (isset($cart[$cartKey])) {

                $cart[$cartKey]['qty'] = $request->quantity;

                session()->put('cart', $cart);

                return response()->json([
                    'success' => true,
                    'message' => 'Cart session updated successfully.',
                ], 200);
            }

            return response()->json(['error' => 'Item not found in session cart.'], 404);
        }
    }

    public function remove(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'product_type' => 'required',
        ]);

        $type = $request->product_type;

        try {
            $realProductId = decrypt($request->product_id);
            $product_package_id = decrypt($request->package_id) ?? null;
        } catch (DecryptException $e) {
            return response()->json(['error' => 'Invalid product data.'], 400);
        }

        $authUser = Auth::id();

        if ($authUser) {
            $deleted = Cart::query()->where('user_id', $authUser)
                ->where('product_id', $realProductId)
                ->when(!empty($product_package_id), function($q) use ($product_package_id) {
                    $q->where('package_id', $product_package_id);
                })
                ->delete();

            if ($deleted) {
                return response()->json([
                    'success' => true,
                    'message' => 'Item removed from cart.',
                    'cart'    => Cart::query()->where('user_id', $authUser)->count(),
                ], 200);
            }

            return response()->json(['error' => 'Item not found in cart.'], 404);

        } else {
            $cart = session()->get('cart', []);

            $cartKey = $type . '_' . $realProductId . (!empty($product_package_id) ? '_' . $product_package_id : '');

            if (isset($cart[$cartKey])) {

                unset($cart[$cartKey]);

                session()->put('cart', $cart);

                return response()->json([
                    'success' => true,
                    'message' => 'Item removed from session cart.',
                    'cart'    => !empty($cart) ? count($cart) : 0,
                ], 200);
            }

            return response()->json(['error' => 'Item not found in session cart.'], 404);
        }
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id'    => 'required|string',
            'product_type'  => 'required|string|max:100',
            'product_price' => 'nullable|numeric|min:0',
            'product_qty'   => 'required|integer|min:1',
        ]);

        try {
            $id = decrypt($request->product_id);
            $product_package_id = $request->filled('product_package_id') ? decrypt($request->product_package_id) : null;
        } catch (DecryptException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid product ID.'
            ], 400);
        }

        $packageName = null;
        $packageID = null;
        $title = null;
        $img = null;
        $price = 0;

        $type  = $request->product_type;
        $reqQty = $request->product_qty ?? 1;
        $authUser = Auth::id();

        if ($type == 'product') {
            $dp = DigitalProduct::query()->find($id);
            $title = $dp->title ?? null;
            $img = $dp->image_url ?? null;
            $price = $dp->price ?? 0;

        } elseif ($type == 'service') {
            $ds = DigitalService::select(['id', 'title', 'image_url', 'price'])
                    ->with([
                        'packages' => function ($q) use ($product_package_id) {
                            $q->when(!empty($product_package_id), function ($sq) use ($product_package_id) {
                                $sq->select(['id','digital_service_id','package_name','price'])
                                ->where('id', $product_package_id);
                            });
                        }
                    ])
                    ->find($id);

            $title = $ds->title ?? null;
            $img = $ds->image_url ?? null;
            $price = $ds->price ?? 0;

            if ($ds && $ds->packages && $ds->packages->isNotEmpty()) {
                $package = $ds->packages->first();
                $packageID = $package->id;
                $packageName = $package->package_name;
                $price = $package->price;
            }
        }

        try {
            if ($authUser) {
                $existingCartItem = Cart::query()->where('user_id', $authUser)
                    ->where('product_id', $id)
                    ->where('product_type', $type)
                    ->when($packageID, function($q) use ($packageID) {
                        return $q->where('package_id', $packageID);
                    })
                    ->first();

                if ($existingCartItem) {
                    if ($existingCartItem->product_type == 'product') {
                        $newQty = $existingCartItem->product_qty + $reqQty;
                    } else if ($existingCartItem->product_type == 'service') {
                        $newQty = $reqQty;
                    }

                    $existingCartItem->update([
                        'product_qty'   => $newQty,
                        'product_price' => $price,
                        'total_amount'  => $newQty * $price
                    ]);
                } else {
                    $initialQty = $reqQty;

                    Cart::create([
                        'user_id'       => $authUser,
                        'product_id'    => $id,
                        'package_id'    => $packageID,
                        'package_name'    => $packageName,
                        'product_title' => $title,
                        'product_img'   => $img,
                        'product_type'  => $type,
                        'product_price' => $price,
                        'product_qty'   => $initialQty,
                        'total_amount'  => $initialQty * $price
                    ]);
                }

                $cartCount = Cart::query()->where('user_id', $authUser)->count();

            } else {
                $cart = session()->get('cart', []);

                $cartKey = $type . '_' . $id . ($packageID ? '_' . $packageID : '');

                if (isset($cart[$cartKey])) {
                    if ($cart[$cartKey]['type'] == 'product') {
                        $cart[$cartKey]['qty'] = $cart[$cartKey]['qty'] + $reqQty;
                    } else if ($cart[$cartKey]['type'] == 'service') {
                        $cart[$cartKey]['qty'] = $reqQty;
                    }
                } else {
                    $cart[$cartKey] = [
                        'id'           => $id,
                        'title'        => $title,
                        'image'        => $img,
                        'type'         => $type,
                        'price'        => $price,
                        'qty'          => $reqQty,
                        'package_id'   => $packageID,
                        'package_name' => $packageName,
                    ];
                }

                session()->put('cart', $cart);
                $cartCount = count($cart);
            }

            return response()->json([
                'status'  => true,
                'message' => 'Product added to cart successfully!',
                'cart'    => $cartCount
            ]);

        } catch (\Exception $e) {
            Log::error('Add To Cart Error: ' . $e->getMessage());

            return response()->json([
                'status'  => false,
                'message' => 'Something went wrong.'
            ], 500);
        }
    }

    public static function storeCartitems()
    {
        $authUser = Auth::id();
        $cartSession = session()->get('cart', []);

        if (empty($cartSession) || !$authUser) {
            return;
        }

        try {
            foreach ($cartSession as $key => $item) {

                $packageId = $item['package_id'] ?? null;
                $packageName = $item['package_name'] ?? null;

                $existingCartItem = Cart::query()->where('user_id', $authUser)
                    ->where('product_id', $item['id'])
                    ->where('product_type', $item['type'])
                    ->when($packageId, function($q) use ($packageId) {
                        $q->where('package_id', $packageId);
                    })
                    ->first();

                $price = 0;
                if ($item['type'] == 'product') {
                    $dp = DigitalProduct::query()->find($item['id']);
                    $price = $dp->price ?? 0;

                } else if ($item['type'] == 'service') {
                    $ds = DigitalService::query()->when(!empty($packageId), function ($query) use ($packageId) {
                            $query->with(['packages' => function ($q) use ($packageId) {
                                $q->where('id', $packageId);
                            }]);
                        })
                        ->find($item['id']);

                    if ($ds) {
                        if (!empty($packageId) && $ds->relationLoaded('packages') && $ds->packages->isNotEmpty()) {
                            $price = $ds->packages->first()->price;
                        } else {
                            $price = $ds->price ?? 0;
                        }
                    }
                }

                if (!empty($existingCartItem)) {
                    $newQty = $existingCartItem->product_qty + $item['qty'];

                    $existingCartItem->update([
                        'product_qty'   => $newQty,
                        'product_price' => $price,
                        'total_amount'  => $newQty * $price
                    ]);
                } else {
                    $initialQty = $item['qty'];

                    Cart::create([
                        'user_id'       => $authUser,
                        'product_id'    => $item['id'],
                        'package_id'    => $packageId,
                        'package_name'  => $packageName,
                        'product_title' => $item['title'],
                        'product_img'   => $item['image'],
                        'product_type'  => $item['type'],
                        'product_price' => $price,
                        'product_qty'   => $initialQty,
                        'total_amount'  => $initialQty * $price,
                    ]);
                }
            }

            session()->forget('cart');

        } catch (\Exception $e) {
            Log::error('Error storeCartitems() -> ' . $e->getMessage());
        }
    }
}
