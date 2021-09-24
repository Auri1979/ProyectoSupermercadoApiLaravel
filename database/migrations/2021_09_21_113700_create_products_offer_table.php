<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_offer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_offer');
            $table->unsignedBigInteger('id_product');
            $table->timestamps();

            $table->foreign('id_offer')->references('id')->on('products');
            $table->foreign('id_product')->references('id')->on('products');
<<<<<<< HEAD
=======
            $table->foreign('id_offer')->references('id')->on('offers');

>>>>>>> 11bbcd4e3ac074277696f4687459dc2ec157d649
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_offer');
    }
}
