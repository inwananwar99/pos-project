<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id('id_penjualan');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_barang');
            $table->integer('jumlah');
            $table->integer('total');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_barang')->references('id_barang')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
