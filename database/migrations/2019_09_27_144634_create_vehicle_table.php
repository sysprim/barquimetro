<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('license_plate',7);
            $table->string('color',15);
            $table->string('image',255);
            $table->string('type',15);
            $table->integer('brand_vehicle_id')->unsigned();
            $table->foreign('brand_vehicle_id')->references('id')->on('brands');
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
        Schema::dropIfExists('vehicles');
    }
}
