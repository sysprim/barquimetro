<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingsVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkings_vehicles', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('parking_id')->unsigned();
            $table->integer('vehicle_id')->unsigned();
            $table->integer('credits');
            $table->date('date_parking');
            $table->foreign('parking_id')->references('id')->on('parking');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
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
        Schema::dropIfExists('parkings_vehicles');
    }
}
