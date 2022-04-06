<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('parent_id')->default(0);
            $table->string('title', length:150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',length: 100)->nullable();
            $table->string('slug',100)->nullable();
            $table->string('status',5)->nullable()->default('false');
            $table->timestamps();
            $table->string('category_id')->nullable();
            $table->string('user_id')->nullable();
            $table->integer('quantity')->default(1);
            $table->integer('minquantity')->default(5);
            $table->integer('price')->default(0);
            $table->integer('tax')->default(18);
            $table->text('detail')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
