<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('id_transaksi', 300)->nullable();
            $table->text('token')->nullable();
            $table->string('title', 300)->nullable();
            $table->string('camp_ke', 300)->nullable();
            $table->string('uang_masuk', 300)->nullable();
            $table->string('lain_lain', 300)->nullable();
            $table->string('total_uang_masuk', 300)->nullable();

            // <!-- GAJI TRAINER -->
            $table->string('gaji_trainer', 300)->nullable();
            $table->text('gaji_trainer_nama')->nullable();
            $table->string('gaji_trainer1', 300)->nullable();
            $table->text('gaji_trainer_nama1')->nullable();
            $table->string('gaji_trainer2', 300)->nullable();
            $table->text('gaji_trainer_nama2')->nullable();
            $table->string('gaji_trainer3', 300)->nullable();
            $table->text('gaji_trainer_nama3')->nullable();
            $table->string('gaji_trainer4', 300)->nullable();
            $table->text('gaji_trainer_nama4')->nullable();
            $table->string('gaji_trainer5', 300)->nullable();
            $table->text('gaji_trainer_nama5')->nullable();
            $table->string('gaji_trainer6', 300)->nullable();
            $table->text('gaji_trainer_nama6')->nullable();
            $table->string('total_gaji_trainer', 300)->nullable();
            // <!-- END -->

            // <!-- GAJI TEAM -->
            $table->string('gaji_team', 300)->nullable();
            $table->text('gaji_team_nama')->nullable();
            $table->string('gaji_team1', 300)->nullable();
            $table->text('gaji_team_nama1')->nullable();
            $table->string('gaji_team2', 300)->nullable();
            $table->text('gaji_team_nama2')->nullable();
            $table->string('gaji_team3', 300)->nullable();
            $table->text('gaji_team_nama3')->nullable();
            $table->string('gaji_team4', 300)->nullable();
            $table->text('gaji_team_nama4')->nullable();
            $table->string('gaji_team5', 300)->nullable();
            $table->text('gaji_team_nama5')->nullable();
            $table->string('gaji_team6', 300)->nullable();
            $table->text('gaji_team_nama6')->nullable();
            $table->string('gaji_team7', 300)->nullable();
            $table->text('gaji_team_nama7')->nullable();
            $table->string('gaji_team8', 300)->nullable();
            $table->text('gaji_team_nama8')->nullable();
            $table->string('gaji_team9', 300)->nullable();
            $table->text('gaji_team_nama9')->nullable();
            $table->string('gaji_team10', 300)->nullable();
            $table->text('gaji_team_nama10')->nullable();
            $table->string('total_gaji_team', 300)->nullable();
            // <!-- END -->

            $table->string('team_cabang', 300)->nullable();
            $table->string('booknote', 300)->nullable();
            $table->string('grammarly', 300)->nullable();
            $table->text('peserta')->nullable();

            // <!-- TIKET TRAINER BERANGKAT -->
            $table->string('tiket_trainer', 300)->nullable();
            $table->text('tiket_trainer_nama')->nullable();
            $table->string('tiket_trainer1', 300)->nullable();
            $table->text('tiket_trainer_nama1')->nullable();
            $table->string('tiket_trainer2', 300)->nullable();
            $table->text('tiket_trainer_nama2')->nullable();
            $table->string('tiket_trainer3', 300)->nullable();
            $table->text('tiket_trainer_nama3')->nullable();
            $table->string('tiket_trainer4', 300)->nullable();
            $table->text('tiket_trainer_nama4')->nullable();
            $table->string('tiket_trainer5', 300)->nullable();
            $table->text('tiket_trainer_nama5')->nullable();
            $table->string('tiket_trainer6', 300)->nullable();
            $table->text('tiket_trainer_nama6')->nullable();
            $table->string('tiket_trainer7', 300)->nullable();
            $table->text('tiket_trainer_nama7')->nullable();
            $table->text('total_tiket_trainer_berangkat')->nullable();
            // <!-- END -->

            // <!-- TIKET TRAINER PULANG -->
            $table->text('tiket_trainer_pulang')->nullable();
            $table->text('tiket_trainer_pulang_nama')->nullable();
            $table->text('tiket_trainer_pulang1')->nullable();
            $table->text('tiket_trainer_pulang_nama1')->nullable();
            $table->text('tiket_trainer_pulang2')->nullable();
            $table->text('tiket_trainer_pulang_nama2')->nullable();
            $table->text('tiket_trainer_pulang3')->nullable();
            $table->text('tiket_trainer_pulang_nama3')->nullable();
            $table->text('tiket_trainer_pulang4')->nullable();
            $table->text('tiket_trainer_pulang_nama4')->nullable();
            $table->text('tiket_trainer_pulang5')->nullable();
            $table->text('tiket_trainer_pulang_nama5')->nullable();
            $table->text('tiket_trainer_pulang6')->nullable();
            $table->text('tiket_trainer_pulang_nama6')->nullable();
            $table->text('tiket_trainer_pulang7')->nullable();
            $table->text('tiket_trainer_pulang_nama7')->nullable();
            $table->text('total_tiket_trainer_pulang')->nullable();
            // <!-- END -->

            // <!-- TIKET TEAM BERANGKAT -->
            $table->string('tiket_team', 300)->nullable();
            $table->text('tiket_team_nama')->nullable();
            $table->string('tiket_team1', 300)->nullable();
            $table->text('tiket_team_nama1')->nullable();
            $table->string('tiket_team2', 300)->nullable();
            $table->text('tiket_team_nama2')->nullable();
            $table->string('tiket_team3', 300)->nullable();
            $table->text('tiket_team_nama3')->nullable();
            $table->string('tiket_team4', 300)->nullable();
            $table->text('tiket_team_nama4')->nullable();
            $table->string('tiket_team5', 300)->nullable();
            $table->text('tiket_team_nama5')->nullable();
            $table->string('tiket_team6', 300)->nullable();
            $table->text('tiket_team_nama6')->nullable();
            $table->string('tiket_team7', 300)->nullable();
            $table->text('tiket_team_nama7')->nullable();
            $table->text('total_tiket_team_berangkat')->nullable();
            // <!-- END -->

            // <!-- TIKET TEAM PULANG -->
            $table->text('tiket_team_pulang')->nullable();
            $table->text('tiket_team_pulang_nama')->nullable();
            $table->text('tiket_team_pulang1')->nullable();
            $table->text('tiket_team_pulang_nama1')->nullable();
            $table->text('tiket_team_pulang2')->nullable();
            $table->text('tiket_team_pulang_nama2')->nullable();
            $table->text('tiket_team_pulang3')->nullable();
            $table->text('tiket_team_pulang_nama3')->nullable();
            $table->text('tiket_team_pulang4')->nullable();
            $table->text('tiket_team_pulang_nama4')->nullable();
            $table->text('tiket_team_pulang5')->nullable();
            $table->text('tiket_team_pulang_nama5')->nullable();
            $table->text('tiket_team_pulang6')->nullable();
            $table->text('tiket_team_pulang_nama6')->nullable();
            $table->text('tiket_team_pulang7')->nullable();
            $table->text('tiket_team_pulang_nama7')->nullable();
            $table->text('total_tiket_team_pulang')->nullable();
            // <!-- END -->

            $table->string('hotel', 300)->nullable();
            $table->string('marketing', 300)->nullable();
            $table->string('konsumsi_tambahan', 300)->nullable();
            $table->string('lainnya', 300)->nullable();
            $table->string('total', 300)->nullable();
            $table->string('keuntungan', 300)->nullable();
            $table->string('persentase_keuntungan', 300)->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->dateTime('tanggal_akhir')->nullable();
            $table->string('status', 300)->default('PENDING');
            $table->text('note')->nullable();
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
        Schema::dropIfExists('camp');
    }
}
