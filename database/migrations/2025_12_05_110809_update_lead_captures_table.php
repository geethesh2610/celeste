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
        Schema::table('lead_captures', function (Blueprint $table) {
            $table->text('price')->nullable()->after('name');
            $table->text('excerpt')->nullable()->after('price');
            $table->string('landmark')->nullable()->after('excerpt');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lead_captures', function (Blueprint $table) {
            $table->dropColumn(['price', 'excerpt', 'landmark']);
        });
    }
};
