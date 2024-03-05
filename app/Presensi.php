<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
  /**
   * @var string
   */
  protected $table = 'presensi';

  /**
   * @var array
   */
  protected $fillable = [
    'user_id',
    'status',
    'status_pulang',
    'note',
    'gambar',
    'gambar_pulang',
    'lokasi',
    'time_pulang',
    'latitude',
    'longitude',
    'alpha',
    'hadir',
    'camp_jogja',
    'perjalanan_jawa',
    'perjalanan_luar_jawa',
    'camp_luar_kota',
    'remote',
    'izin',
    'created_at',
    'updated_at',
  ];
}
