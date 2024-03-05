<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    /**
     * @var string
     */
    protected $table = 'peserta';

    /**
     * @var array
     */
    protected $fillable = [
        'token',
        'token_update',
        'email',
        'nama',
        'afiliasi',
        'judul',
        'jurnal',
        'refrensi',
        'digital_writing',
        'mendeley',
        'persentase_penyelesaian',
        'submit',
        'target',
        'scopus_camp',
        'materi',
        'makanan',
        'pelayanan',
        'tempat',
        'terfavorit',
        'terbaik',
        'terlucu',
        'kritik',
        'created_at',
        'updated_at',
    ];
}
