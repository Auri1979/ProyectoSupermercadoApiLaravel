<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
           // $table->unsignedBigInteger('id_order');
            $table->string('description');
            $table->string('status');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            //$table->foreign('id_order')->references('id')->on('orders');

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
}
