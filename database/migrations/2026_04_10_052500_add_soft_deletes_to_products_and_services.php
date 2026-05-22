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
        Schema::table('digital_products', function (Blueprint $table) {
            $table->softDeletes()->after('sort_order');
        });

        Schema::table('digital_services', function (Blueprint $table) {
            $table->softDeletes()->after('sort_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('digital_products', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('digital_services', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
