<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wallet_histories', function (Blueprint $table) {
            $table->id();
            $table->date('date');

            /*
            |--------------------------------------------------------------------------
            | Relations
            |--------------------------------------------------------------------------
            */

            // Wallet ID
            $table->unsignedBigInteger('wallet_id')
                ->comment('Related wallet ID');

            // User ID
            $table->unsignedBigInteger('user_id')
                ->comment('Related user ID');


            /*
            |--------------------------------------------------------------------------
            | Transaction Information
            |--------------------------------------------------------------------------
            */

            // Transaction Type
            $table->enum('type', [
                'credit',      // Money Added
                'debit',       // Money Deducted
                'refund',      // Refund Amount
                'withdraw',    // Withdraw Request
                'purchase'     // Purchase Payment
            ])->comment('Wallet transaction type');

            // Current Wallet Balance Before Transaction
            $table->decimal('current_balance', 12, 2)
                ->default(0)
                ->comment('Wallet balance before transaction');

            // Transaction Amount
            $table->decimal('amount', 12, 2)
                ->default(0)
                ->comment('Transaction amount');

            // Wallet Balance After Transaction
            $table->decimal('balance_after', 12, 2)
                ->default(0)
                ->comment('Wallet balance after transaction');


            /*
            |--------------------------------------------------------------------------
            | Payment Gateway Information
            |--------------------------------------------------------------------------
            */

            // Payment Method
            $table->string('payment_method')
                ->nullable()
                ->comment('Payment method like PayPal, Stripe, Razorpay');

            // PayPal Transaction ID
            $table->string('transaction_id')
                ->nullable()
                ->unique()
                ->comment('Gateway transaction ID');

            // Currency
            $table->string('currency', 10)
                ->default('USD')
                ->comment('Transaction currency');

            // Gateway Response
            $table->longText('gateway_response')
                ->nullable()
                ->comment('Full payment gateway response JSON');


            /*
            |--------------------------------------------------------------------------
            | Transaction Status
            |--------------------------------------------------------------------------
            */

            $table->enum('status', [
                'pending',
                'processing',
                'success',
                'failed',
                'cancelled'
            ])
            ->default('pending')
            ->comment('Transaction status');


            /*
            |--------------------------------------------------------------------------
            | Extra Information
            |--------------------------------------------------------------------------
            */

            // Transaction Description
            $table->text('description')
                ->nullable()
                ->comment('Transaction description or note');

            $table->timestamps();

            /*
            |--------------------------------------------------------------------------
            | Foreign Keys
            |--------------------------------------------------------------------------
            */

            $table->foreign('wallet_id')
                ->references('id')
                ->on('wallets')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_histories');
    }
};
