<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\WalletHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class WalletController extends Controller
{

    protected $authUser = null;

    public function __construct()
    {
        $this->authUser = auth()->user();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $currentDate = Carbon::now()->format('Y-m-d');
        try {

            $validated = $request->validate([
                'amount' => [
                    'required',
                    'numeric',
                    'min:1',
                    'max:50000'
                ]
            ], [
                'amount.required' => 'Please enter wallet amount.',
                'amount.numeric'  => 'Amount must be a valid number.',
                'amount.min'      => 'Minimum add balance amount is $1.',
                'amount.max'      => 'Maximum add balance amount is $50,000.'
            ]);

            DB::beginTransaction();

            $wallet = Wallet::firstOrNew([
                'user_id' => $this->authUser->id
            ]);

            $oldBalance = $wallet->balance ?? 0;

            $wallet->date = $currentDate;
            $wallet->user_id = $this->authUser->id;
            $wallet->balance = $oldBalance + $request->amount;
            $wallet->save();

            $newBalance = $wallet->balance;

            $walletHistory = new WalletHistory();
            $walletHistory->date = $currentDate;
            $walletHistory->wallet_id = $wallet->id;
            $walletHistory->user_id = $wallet->user_id;
            $walletHistory->type = 'credit';
            $walletHistory->current_balance = $oldBalance;
            $walletHistory->amount = $request->amount;
            $walletHistory->balance_after = $newBalance;
            $walletHistory->status = 'success';
            $walletHistory->save();

            DB::commit();

            return response()->json([
                'status'  => true,
                'message' => 'Wallet request created successfully.',
                'data'    => [
                    'amount' => $newBalance
                ]
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {

            return response()->json([
                'status' => false,
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {

            DB::rollBack();

            Log::error($e);

            return response()->json([
                'status'  => false,
                'message' => 'somthing went wrong!'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Wallet $wallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wallet $wallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wallet $wallet)
    {
        //
    }
}
