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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('web_basic', 50)->nullable();
            $table->string('web_standard', 50)->nullable();
            $table->string('web_pro', 50)->nullable();
            $table->string('logo_basic', 50)->nullable();
            $table->string('logo_standard', 50)->nullable();
            $table->string('logo_pro', 50)->nullable();
            $table->string('marketing_basic', 50)->nullable();
            $table->string('marketing_standard', 50)->nullable();
            $table->string('marketing_pro', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
