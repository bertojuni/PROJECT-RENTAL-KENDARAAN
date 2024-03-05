<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    /**
     * @var string
     */
    protected $table = 'karir';

    /**
     * @var array
     */
    protected $fillable = [
        'nama',
        'telp',
        'email',
        'cv',
        'lamaran',
        'lainnya',
        'pendidikan',
        'posisi',
        'desc',
        'status',
        'tanggal_interview',
        'lokasi_interview',
        'created_at',
        'updated_at',
    ];
}
