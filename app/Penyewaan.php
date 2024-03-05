<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
  /**
   * @var string
   */
  protected $table = 'penyewaan';

  /**
   * @var array
   */
  protected $fillable = [
    'user_id',
    'tambah_barang_id', // Add this line to the fillable array
    'nama',
    'email',
    'telp',
    'alamat',
    'identitas',
    'jumlah',
    'tanggal',
    'subtotal',
    'total',
    'diskon',
    'lama_peminjaman',
    'pengembalian',
    'status',
    'jaminan',
    'jenis_pembayaran',
    'kekurangan_pembayaran',
    'jumlah_pembayaran',
    'id_transaksi',
  ];
}
