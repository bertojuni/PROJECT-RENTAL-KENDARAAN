<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahBarang extends Migration
{
    public function up()
    {
        Schema::create('tambah_barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_barang', 300)->nullable();
            $table->string('harga_barang', 300)->nullable();
            $table->string('stok', 300)->nullable();
            $table->string('diskon', 300)->nullable();
            $table->string('jenis', 300)->nullable();
            $table->string('perhari', 300)->nullable();
            $table->string('gambar', 300)->nullable();
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tambah_barang');
    }
}
