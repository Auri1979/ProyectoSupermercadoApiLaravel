<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateOrdersProductTable extends Migration
{
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
      public function up()
   {
          Schema::create('orders_product', function (Blueprint $table) {
              $table->unsignedBigInteger('id');
              $table->unsignedBigInteger('order_id');
              $table->unsignedBigInteger('product_id');
              $table->string('description');
              $table->integer('quantity');
              $table->timestamps();

              $table->foreign('order_id')->references('id')->on('orders');
              $table->foreign('product_id')->references('id')->on('products');


        });
    }

//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
     public function down()
      {
         Schema::dropIfExists('orders_product');
        }

      }