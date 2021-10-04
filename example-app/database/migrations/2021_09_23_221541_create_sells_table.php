<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('costumer_ID');
            $table->unsignedBigInteger('seller_ID');
            $table->unsignedBigInteger('car_ID');
            $table->date('sell-date');
            $table->foreign('car_ID')->references('id')->on('cars')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('costumer_ID')->references('id')->on('costumers')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('seller_ID')->references('id')->on('sellers')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sells');
    }
}
