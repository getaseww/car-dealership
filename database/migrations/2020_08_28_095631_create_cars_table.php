<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('count_view')->default(0);
            $table->boolean('is_approved')->default(0);
            $table->string('model');
            $table->string('mileage');
            $table->string('make');
            $table->string('price');
            $table->string('price_type');
            $table->string('year');
            $table->string('condition');
            $table->string('engine_size');
            $table->string('color');
            $table->string('engine_type');
            $table->string('transmission');
            $table->string('photo');
            $table->string('description');
            $table->string('phone');
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
        Schema::dropIfExists('cars');
    }
}
