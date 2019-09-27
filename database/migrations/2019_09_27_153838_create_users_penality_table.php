<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPenalityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_penality', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('fiscal_id')->unsigned();
            $table->integer('penality_id')->unsigned();
            $table->date('date_penality');
            $table->integer('amount');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('fiscal_id')->references('id')->on('users');
            $table->foreign('penality_id')->references('id')->on('penalitys');
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
        Schema::dropIfExists('users_penality');
    }
}
