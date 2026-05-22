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
            $table->string('price')->nullable()->after('description');
            $table->string('badge')->nullable()->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('digital_services', function (Blueprint $table) {
            $table->dropColumn(['price', 'badge']);
        });
    }
};
