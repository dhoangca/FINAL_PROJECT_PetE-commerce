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
        Schema::create('pet_pictures', function (Blueprint $table) {
            $table->increments('pet_pictures_id');
            $table->unsignedInteger('pet_id')->notNullable();
            $table->string('image_url')->notNullable();
            $table->timestamps();
            $table->foreign('pet_id')->references('pet_id')->on('pets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_pictures');
    }
};
