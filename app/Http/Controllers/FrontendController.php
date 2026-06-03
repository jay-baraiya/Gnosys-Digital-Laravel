<?php

namespace App\Http\Controllers;

use App\Models\DigitalProduct;
use App\Models\DigitalService;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Feature;
use App\Models\ImpactStat;
use App\Models\Testimonial;
use App\Models\PageContent;
use App\Models\ProcessStep;
use App\Models\Location;
use App\Models\Order;
use App\Models\User;
use GuzzleHttp\Promise\PromisorInterface;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $featuredProducts = DigitalProduct::active()->ordered()->take(4)->get();
        $featuredServices = DigitalService::active()->ordered()->take(4)->get();

        $features = Feature::active()->byPage('home')->ordered()->get();
        $stats = ImpactStat::active()->ordered()->get();
        $testimonials = Testimonial::active()->ordered()->get();

        $heroContent = PageContent::getSection('home', 'hero');
        $cultureCta = PageContent::getSection('home', 'culture_cta');

        return view('welcome', compact(
            'featuredProducts',
            'featuredServices',
            'features',
            'stats',
            'testimonials',
            'heroContent',
            'cultureCta'
        ));
    }

    public function digitalProducts(Request $request)
    {

        $query = DigitalProduct::active()->ordered();

        if ($request->category) {
            $category = Category::where('slug', $request->category)->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        $products = $query->get();
        $categories = Category::where('type', 'product')
            ->whereHas('products', function ($q) {
                $q->active();
            })->get();

        return view('digital-products', compact('products', 'categories'));
    }

    public function productCategory($slug)
    {
        $category = Category::where('slug', $slug)->where('type', 'product')->firstOrFail();
        $products = $category->products()->active()->ordered()->get();

        $categories = Category::where('type', 'product')
            ->whereHas('products', function ($q) {
                $q->active();
            })->get();

        return view('digital-products', compact('products', 'category', 'categories'));
    }

    public function digitalServices(Request $request)
    {
        $query = DigitalService::active()->ordered();

        if ($request->category) {
            $category = Category::where('slug', $request->category)->where('type', 'service')->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        $services = $query->get();
        $categories = Category::where('type', 'service')
            ->whereHas('services', function ($q) {
                $q->active();
            })->get();

        return view('digital-services', compact('services', 'categories'));
    }

    public function serviceCategory($slug)
    {
        $category = Category::where('slug', $slug)->where('type', 'service')->firstOrFail();
        $services = $category->services()->active()->ordered()->get();

        $categories = Category::where('type', 'service')
            ->whereHas('services', function ($q) {
                $q->active();
            })->get();

        return view('digital-services', compact('services', 'category', 'categories'));
    }

    public function serviceDetail($slug)
    {
        $service = DigitalService::active()->where('slug', $slug)->firstOrFail();

        $relatedServices = DigitalService::active()
            ->where('category_id', $service->category_id)
            ->where('id', '!=', $service->id)
            ->take(3)
            ->get();

        return view('digital-services.show', compact('service', 'relatedServices'));
    }

    public function blogIndex(Request $request)
    {
        $query = Blog::with(['category', 'author'])
            ->where('is_published', true);

        // Filter by category if selected
        if ($request->category) {
            $category = Category::where('slug', $request->category)->where('type', 'blog')->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        $blogs = $query->latest()->paginate(9);
        $categories = Category::where('type', 'blog')
            ->whereHas('blogs', function ($q) {
                $q->where('is_published', true);
            })
            ->get();

        return view('blog.index', compact('blogs', 'categories'));
    }

    public function blogShow($slug)
    {
        $blog = Blog::with(['category', 'author'])
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $recentPosts = Blog::where('id', '!=', $blog->id)
            ->where('is_published', true)
            ->latest()
            ->take(5)
            ->get();

        return view('blog.show', compact('blog', 'recentPosts'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|url|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // For now, we just redirect back with success.
        // In a real scenario, this is where you'd send an email.
        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function aboutCulture()
    {
        $heroContent = PageContent::getSection('about', 'hero');
        $missionContent = PageContent::getSection('about', 'mission');
        $storyContent = PageContent::getSection('about', 'story');

        $steps = ProcessStep::active()->ordered()->get();
        $features = Feature::active()->byPage('about')->ordered()->get();
        $locations = Location::active()->ordered()->get();

        return view('about.culture', compact(
            'heroContent',
            'missionContent',
            'storyContent',
            'steps',
            'features',
            'locations'
        ));
    }

    public function profile()
    {
        $user = auth()->user();

        $orders = Order::with([
            'orderItems' => function($q) {
                $q->select(['id','order_id','product_id','product_title','quantity','price','total_amount','package_name','product_type']);
            }
        ])
        ->select([
            'id','user_id','guest_email','date_time','order_number','subtotal','total_amount','status'
        ])
        ->where('user_id', $user->id)
        ->get();

        return view('profile', compact('user','orders'));
    }


    public function updateProfile(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->back();
    }

    public function getOrderItemList(Request $request, $order_id) {
        try {
            $realOrderId = decrypt($order_id);
        } catch (DecryptException $e) {
            return response()->json(['success' => false, 'message' => 'Invalid Order ID'], 400);
        }

        $order = Order::with('orderItems')->find($realOrderId);

        if (!$order) {
            return response()->json(['success' => false, 'message' => 'Order not found'], 404);
        }

        $html = view('order_items_table', compact('order'))->render();

        // JSON રિસ્પોન્સમાં HTML મોકલો
        return response()->json([
            'success' => true,
            'html' => $html
        ]);
    }
}
