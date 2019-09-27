<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_wallet', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('wallet_id')->unsigned();
            $table->integer('wallet_id_transfer')->unsigned();
            $table->date('transfer_date');
            $table->integer('amount');
            $table->foreign('wallet_id')->references('id')->on('wallet');
            $table->foreign('wallet_id_transfer')->references('id')->on('wallet');
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
        Schema::dropIfExists('history_wallet');
    }
}
