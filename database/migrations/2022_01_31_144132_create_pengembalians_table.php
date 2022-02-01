<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembaliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalians', function (Blueprint $table) {
            $table->id('id_pengembalian');
            $table->unsignedBigInteger('id_penjualan');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_barang');
            $table->timestamps();
            $table->foreign('id_barang')->references('id_barang')->on('barangs');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_penjualan')->references('id_penjualan')->on('penjualans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalians');
    }
}
