<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('id_barang');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_supplier');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategoris');
            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
