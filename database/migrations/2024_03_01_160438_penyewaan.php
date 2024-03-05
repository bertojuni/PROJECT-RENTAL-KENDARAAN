<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penyewaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tambah_barang_id');
            $table->string('id_transaksi', 300)->nullable();
            $table->string('nama', 300)->nullable();
            $table->string('email', 300)->nullable();
            $table->string('telp', 300)->nullable();
            $table->text('alamat')->nullable();
            $table->string('identitas', 300)->nullable();
            $table->string('jumlah', 300)->nullable();
            $table->string('lama_peminjaman', 300)->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->dateTime('pengembalian')->nullable();
            $table->string('subtotal', 300)->nullable();
            $table->text('total')->nullable();
            $table->text('diskon')->nullable();
            $table->text('status')->nullable();
            $table->string('jamaninan', 300)->nullable();
            $table->text('jenis_pembayaran')->nullable();
            $table->text('kekurangan_pembayaran')->nullable();
            $table->string('jumlah_pembayaran', 300)->nullable();
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->foreign('tambah_barang_id')
                ->references('id')->on('penyewaan')
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
        Schema::dropIfExists('penyewaan');
    }
}
