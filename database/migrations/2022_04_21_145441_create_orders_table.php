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
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->integer('user_id');
            $table->string('name', 20);
            $table->string('email',50);
            $table->string('address', 200);
            $table->string('phone', 20);
            $table->float('total');
            $table->string('note', 150);
            $table->string('IP', 20);
            $table->string('status', 30)->default('New');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
