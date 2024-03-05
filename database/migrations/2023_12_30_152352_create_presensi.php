<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('status', 300)->nullable();
            $table->string('status_pulang', 300)->nullable();
            $table->text('note')->nullable();
            $table->string('gambar', 300)->nullable();
            $table->string('gambar_pulang', 300)->nullable();
            $table->string('lokasi', 300)->nullable();
            $table->dateTime('time_pulang')->nullable();
            $table->string('latitude', 300)->nullable();
            $table->string('longitude', 300)->nullable();
            $table->string('hadir', 300)->nullable();
            $table->string('alpha', 300)->nullable();
            $table->string('camp_jogja', 300)->nullable();
            $table->string('perjalanan_jawa', 300)->nullable();
            $table->string('perjalanan_luar_jawa', 300)->nullable();
            $table->string('camp_luar_kota', 300)->nullable();
            $table->string('remote', 300)->nullable();
            $table->string('izin', 300)->nullable();
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
        Schema::dropIfExists('presensi');
    }
}
