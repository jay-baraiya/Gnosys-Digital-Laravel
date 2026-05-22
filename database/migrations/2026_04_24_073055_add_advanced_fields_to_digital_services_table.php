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
        Schema::table('digital_services', function (Blueprint $table) {
            $table->text('tags')->nullable()->after('features');
            $table->json('gallery')->nullable()->after('tags');
            $table->string('product_type')->default('simple')->after('gallery');
            $table->json('product_data')->nullable()->after('product_type');
            $table->boolean('visibility')->default(true)->after('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('digital_services', function (Blueprint $table) {
            $table->dropColumn(['tags', 'gallery', 'product_type', 'product_data', 'visibility']);
        });
    }
};
