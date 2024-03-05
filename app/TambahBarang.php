<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TambahBarang extends Model
{
  /**
   * @var string
   */
  protected $table = 'tambah_barang';

  /**
   * @var array
   */
  protected $fillable = [
    'user_id', 'nama_barang', 'harga_barang', 'diskon', 'stok', 'jenis', 'perhari'
  ];
}
