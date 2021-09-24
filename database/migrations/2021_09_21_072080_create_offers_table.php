<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('type_offer');
            $table->string('name_offer');
            $table->date('deadline');
            $table->timestamps();
<<<<<<< HEAD:database/migrations/2021_09_21_072080_create_offers_table.php
=======

            
    
>>>>>>> 11bbcd4e3ac074277696f4687459dc2ec157d649:database/migrations/2021_09_21_073001_create_offers_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
