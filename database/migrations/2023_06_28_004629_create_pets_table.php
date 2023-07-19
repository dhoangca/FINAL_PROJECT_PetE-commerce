<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('pet_id');
            $table->string('name')->notNullable();
            $table->string('breed')->notNullable();
            $table->string('gender')->notNullable();
            $table->decimal('price', 10, 2)->notNullable();
            $table->string('description')->nullable();
            $table->integer('quantity')->notNullable();
            $table->string('image')->nullable();
            $table->string('status')->default('Stocking');
            $table->integer('sales')->default(0);
            $table->timestamp('sold_at')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('deleted_at')->nullable()->useCurrentOnUpdate();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
