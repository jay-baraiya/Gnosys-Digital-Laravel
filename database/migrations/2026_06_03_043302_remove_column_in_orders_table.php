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
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'shipping_country')) {
                $table->dropColumn('shipping_country');
            }

            if (Schema::hasColumn('orders', 'shipping_first_name')) {
                $table->dropColumn('shipping_first_name');
            }

            if (Schema::hasColumn('orders', 'shipping_last_name')) {
                $table->dropColumn('shipping_last_name');
            }

            if (Schema::hasColumn('orders', 'shipping_address')) {
                $table->dropColumn('shipping_address');
            }

            if (Schema::hasColumn('orders', 'shipping_apartment')) {
                $table->dropColumn('shipping_apartment');
            }

            if (Schema::hasColumn('orders', 'shipping_city')) {
                $table->dropColumn('shipping_city');
            }

            if (Schema::hasColumn('orders', 'shipping_province')) {
                $table->dropColumn('shipping_province');
            }

            if (Schema::hasColumn('orders', 'shipping_postal_code')) {
                $table->dropColumn('shipping_postal_code');
            }

            if (Schema::hasColumn('orders', 'shipping_phone')) {
                $table->dropColumn('shipping_phone');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
