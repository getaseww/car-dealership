<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('count_view')->default(0);
            $table->boolean('is_approved')->default(0);
            $table->string('type');
            $table->string('price');
            $table->string('price_type');
            $table->string('bath_room');
            $table->string('bed_room');
            $table->string('living_room');
            $table->string('phone');
            $table->string('med_room');
            $table->string('kitchen');
            $table->string('address');
            $table->string('meter_square');
            $table->string('photo');
            $table->string('description');
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
        Schema::dropIfExists('houses');
    }
}
