<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaporanPeserta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token', 300)->nullable();
            $table->string('token_update', 300)->nullable();
            $table->string('email', 300)->nullable();
            $table->string('nama', 300)->nullable();
            $table->string('afiliasi', 300)->nullable();
            $table->string('judul', 300)->nullable();
            $table->string('jurnal', 300)->nullable();
            $table->string('refrensi', 300)->nullable();
            $table->string('digital_writing', 300)->nullable();
            $table->string('mendeley', 300)->nullable();
            $table->string('persentase_penyelesaian', 300)->nullable();
            $table->string('submit', 300)->nullable();
            $table->dateTime('target')->nullable();
            $table->string('scopus_camp', 300)->nullable();
            $table->string('materi', 300)->nullable();
            $table->string('makanan', 300)->nullable();
            $table->string('pelayanan', 300)->nullable();
            $table->string('tempat', 300)->nullable();
            $table->string('terfavorit', 300)->nullable();
            $table->string('terbaik', 300)->nullable();
            $table->string('terlucu', 300)->nullable();
            $table->text('kritik')->nullable();
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
        Schema::dropIfExists('peserta');
    }
}
