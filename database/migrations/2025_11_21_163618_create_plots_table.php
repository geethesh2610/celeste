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
        Schema::create('plots', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('price')->nullable();
            $table->string('plot_size')->nullable();
            $table->string('zoning')->nullable();
            $table->enum('category', [
                'residential',
                'commercial',
                'industrial-projects',
                'offplan-projects',
            ])->default('residential');
            $table->text('features_tag')->nullable();
            $table->longText('description')->nullable();
            $table->longText('property_detail')->nullable();
            $table->longText('location')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plots');
    }
};
