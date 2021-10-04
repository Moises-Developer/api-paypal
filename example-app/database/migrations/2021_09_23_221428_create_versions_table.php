<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versions', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('name', 30);
            $table->double('power', 8, 2);
            $table->double('base_price', 8, 2);
            $table->string('kind of gasoline', 30);
            $table->unsignedBigInteger('model_ID');
            $table->foreign('model_ID')->references('id')->on('models')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::drop('versions');
    }
}
