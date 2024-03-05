<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    /**
     * @var string
     */
    protected $table = 'camp';

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'id_transaksi',
        'token',
        'title',
        'camp_ke',
        'uang_masuk',
        'lain_lain',
        'total_uang_masuk',

        // <!-- gaji trainer -->
        'gaji_trainer',
        'gaji_trainer_nama',
        'gaji_trainer1',
        'gaji_trainer_nama1',
        'gaji_trainer2',
        'gaji_trainer_nama2',
        'gaji_trainer3',
        'gaji_trainer_nama3',
        'gaji_trainer4',
        'gaji_trainer_nama4',
        'gaji_trainer5',
        'gaji_trainer_nama5',
        'gaji_trainer6',
        'gaji_trainer_nama6',
        // <!-- end -->

        // <!-- gaji team -->
        'gaji_team',
        'gaji_team_nama',
        'gaji_team1',
        'gaji_team_nama1',
        'gaji_team2',
        'gaji_team_nama2',
        'gaji_team3',
        'gaji_team_nama3',
        'gaji_team4',
        'gaji_team_nama4',
        'gaji_team5',
        'gaji_team_nama5',
        'gaji_team6',
        'gaji_team_nama6',
        'gaji_team7',
        'gaji_team_nama7',
        'gaji_team8',
        'gaji_team_nama8',
        'gaji_team9',
        'gaji_team_nama9',
        'gaji_team10',
        'gaji_team_nama10',
        // <!-- end -->

        'team_cabang',
        'booknote',
        'grammarly',
        'peserta',

        // <!-- tiket trainer berangkat -->
        'tiket_trainer',
        'tiket_trainer_nama',
        'tiket_trainer1',
        'tiket_trainer_nama1',
        'tiket_trainer2',
        'tiket_trainer_nama2',
        'tiket_trainer3',
        'tiket_trainer_nama3',
        'tiket_trainer4',
        'tiket_trainer_nama4',
        'tiket_trainer5',
        'tiket_trainer_nama5',
        'tiket_trainer6',
        'tiket_trainer_nama6',
        'tiket_trainer7',
        'tiket_trainer_nama7',
        // <!-- end -->

        'total_tiket_trainer_berangkat',

        // <!-- tiket trainer pulang -->
        'tiket_trainer_pulang',
        'tiket_trainer_pulang_nama',
        'tiket_trainer_pulang1',
        'tiket_trainer_pulang_nama1',
        'tiket_trainer_pulang2',
        'tiket_trainer_pulang_nama2',
        'tiket_trainer_pulang3',
        'tiket_trainer_pulang_nama3',
        'tiket_trainer_pulang4',
        'tiket_trainer_pulang_nama4',
        'tiket_trainer_pulang5',
        'tiket_trainer_pulang_nama5',
        'tiket_trainer_pulang6',
        'tiket_trainer_pulang_nama6',
        'tiket_trainer_pulang7',
        'tiket_trainer_pulang_nama7',
        // <!-- end -->

        'total_tiket_trainer_pulang',

        // <!-- tiket team berangkat -->
        'tiket_team',
        'tiket_team_nama',
        'tiket_team1',
        'tiket_team_nama1',
        'tiket_team2',
        'tiket_team_nama2',
        'tiket_team3',
        'tiket_team_nama3',
        'tiket_team4',
        'tiket_team_nama4',
        'tiket_team5',
        'tiket_team_nama5',
        'tiket_team6',
        'tiket_team_nama6',
        'tiket_team7',
        'tiket_team_nama7',
        // <!-- end -->

        'total_tiket_team_berangkat',

        // <!-- tiket team pulang -->
        'tiket_team_pulang',
        'tiket_team_pulang_nama',
        'tiket_team_pulang1',
        'tiket_team_pulang_nama1',
        'tiket_team_pulang2',
        'tiket_team_pulang_nama2',
        'tiket_team_pulang3',
        'tiket_team_pulang_nama3',
        'tiket_team_pulang4',
        'tiket_team_pulang_nama4',
        'tiket_team_pulang5',
        'tiket_team_pulang_nama5',
        'tiket_team_pulang6',
        'tiket_team_pulang_nama6',
        'tiket_team_pulang7',
        'tiket_team_pulang_nama7',
        // <!-- end -->

        'total_tiket_team_pulang',
        'hotel',
        'marketing',
        'konsumsi_tambahan',
        'lainnya',
        'total',
        'total_gaji_trainer',
        'total_gaji_team',
        'keuntungan',
        'persentase_keuntungan',
        'tanggal',
        'tanggal_akhir',
        'status',
        'note',
    ];
}
