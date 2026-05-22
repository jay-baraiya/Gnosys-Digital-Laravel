<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.  
     */
    public function up(): void
    {
        Schema::table('digital_services', function (Blueprint $table) {
            $table->json('description_top_blocks')->nullable()->after('description');
            $table->json('service_features_grid')->nullable()->after('description_top_blocks');
            $table->json('process_steps')->nullable()->after('service_features_grid');
            $table->longText('detailed_description')->nullable()->after('process_steps');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('digital_services', function (Blueprint $table) {
            $table->dropColumn(['description_top_blocks', 'service_features_grid', 'process_steps', 'detailed_description']);
        });
    }
};
