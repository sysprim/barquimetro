<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('module_id')->unsigned();
            $table->integer('action_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('module_id')->references('id')->on('module');
            $table->foreign('action_id')->references('id')->on('action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacoras');
    }
}
