<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScopusCamp extends Model
{
    /**
     * @var string
     */
    protected $table = 'scopuscamp';

    /**
     * @var array
     */
    protected $fillable = [
        'token',
        'id_transaksi',
        'categories_scopuscamp_id',
        'email',
        'nama',
        'judul',
        'telp',
        'afiliasi',
        'pembayaran',
        'gambar',
        'status',
        'camp',
        'mulai',
        'selesai',
        'tempat',
        'note',
        'created_at',
        'updated_at',
    ];
}
