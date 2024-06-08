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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('stape_1')->nullable();
            $table->string('company_description')->nullable();
            $table->json('font_selection')->nullable();
            $table->string('stape_4')->nullable();
            $table->json('source_5')->nullable();
            $table->json('source_6')->nullable();
            $table->json('source_7')->nullable();
            $table->json('additional_needs')->nullable();
            $table->json('source_9')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('company')->nullable();

            $table->json('logo_type')->nullable();
            $table->string('websites')->nullable();
            $table->string('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
