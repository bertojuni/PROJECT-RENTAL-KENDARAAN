<?php

namespace App\Http\Controllers\account;

use App\TambahBarang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TambahBarangController extends Controller
{
  /**
   * TambahBarangController constructor.
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $user = Auth::user();

    // Get data based on user role and company
    if ($user->level == 'staff') {
      $TambahBarang = TambahBarang::join('users', 'tambah_barang.user_id', '=', 'users.id')
        ->where('users.company', $user->company)
        ->orderBy('tambah_barang.created_at', 'DESC')
        ->paginate(10);
    } else {
      // If not a manager or staff, show data based on user_id
      $TambahBarang = TambahBarang::where('user_id', $user->id)
        ->orderBy('created_at', 'DESC')
        ->paginate(10);
    }

    return view('account.tambah_barang.index', compact('TambahBarang'));
  }

  public function search(Request $request)
  {
    $search = $request->get('q');
    $user = Auth::user();

    if ($user->level == 'staff') {
      // If the user is a 'staff', search products within the user's company
      $TambahBarang = TambahBarang::join('users', 'tambah_barang.user_id', '=', 'users.id')
        ->where('users.company', $user->company)
        ->where(function ($query) use ($search) {
          $query->where('tambah_barang.nama_barang', 'LIKE', '%' . $search . '%')
            ->orWhere('tambah_barang.harga_barang', 'LIKE', '%' . $search . '%')
            ->orWhere('tambah_barang.stok', 'LIKE', '%' . $search . '%')
            ->orWhere('tambah_barang.jenis', 'LIKE', '%' . $search . '%')
            ->orWhere('tambah_barang.diskon', 'LIKE', '%' . $search . '%');
        })
        ->orderBy('tambah_barang.created_at', 'DESC')
        ->paginate(10);
    } else {
      // If the user is not a 'staff' (manager or other role), search TambahBarang owned by the user
      $TambahBarang = TambahBarang::where('user_id', $user->id)
        ->where(function ($query) use ($search) {
          $query->where('nama_barang', 'LIKE', '%' . $search . '%')
            ->orWhere('harga_barang', 'LIKE', '%' . $search . '%')
            ->orWhere('stok', 'LIKE', '%' . $search . '%')
            ->orWhere('jenis', 'LIKE', '%' . $search . '%')
            ->orWhere('diskon', 'LIKE', '%' . $search . '%');
        })
        ->orderBy('created_at', 'DESC')
        ->paginate(10);
    }

    return view('account.tambah_barang.index', compact('TambahBarang'));
  }


  public function create()
  {
    return view('account.tambah_barang.create');
  }

  public function store(Request $request)
  {
    // Set validation rules
    $this->validate($request, [
      'nama_barang'  => 'required',
      'harga_barang' => 'required',
      'stok'         => 'required',
      'jenis'        => 'required',
    ], [
      'nama_barang.required'   => 'Masukkan Nama Barang!',
      'harga_barang.required'  => 'Masukkan Harga Barang!',
      'stok.required'          => 'Masukkan Jumlah Barang!',
    ]);

    $nama_barang = strtoupper($request->input('nama_barang'));
    $harga_barang = str_replace(",", "", $request->input('harga_barang'));
    $diskon = $request->input('diskon');
    $diskon = empty($diskon) ? 0 : str_replace(",", "", $diskon); // Cek dan atur nilai diskon menjadi 0 jika kosong
    $stok = $request->input('stok');
    $jenis = $request->input('jenis');
    $perhari = $request->input('perhari');

    // Eloquent: Simpan data ke database
    $save = TambahBarang::create([
      'user_id'       => Auth::user()->id,
      'nama_barang'   => $nama_barang,
      'harga_barang'  => $harga_barang,
      'diskon'        => $diskon,
      'stok'          => $stok,
      'jenis'         => $jenis,
      'perhari'       => $perhari,
    ]);

    // Cek apakah data berhasil disimpan
    if ($save) {
      // Redirect dengan pesan sukses
      return redirect()->route('account.tambah_barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    } else {
      // Redirect dengan pesan error
      return redirect()->route('account.tambah_barang.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
  }


  public function edit(Request $request, TambahBarang $tambahBarang)
  {
    return view('account.tambah_barang.edit', compact('tambahBarang'));
  }

  public function update(Request $request, TambahBarang $tambahBarang)
  {
    // Set validation rules
    $this->validate($request, [
      'nama_barang'  => 'required',
      'harga_barang' => 'required',
      'stok'         => 'required',
    ], [
      'nama_barang.required'   => 'Masukkan Nama Barang!',
      'harga_barang.required'  => 'Masukkan Harga Barang!',
      'stok.required'          => 'Masukkan Jumlah Barang!',
    ]);

    $nama_barang = strtoupper($request->input('nama_barang'));
    $harga_barang = str_replace(",", "", $request->input('harga_barang'));
    $diskon = str_replace(",", "", $request->input('diskon'));
    $stok = $request->input('stok');
    $jenis = $request->input('jenis');
    $perhari = $request->input('perhari');

    // Eloquent: Update data di database
    $update = $tambahBarang->update([
      'user_id'       => Auth::user()->id,
      'nama_barang'   => $nama_barang,
      'harga_barang'  => $harga_barang,
      'diskon'        => $diskon,
      'stok'          => $stok,
      'jenis'          => $jenis,
      'perhari'          => $perhari,
    ]);

    // Cek apakah data berhasil diupdate
    if ($update) {
      // Redirect dengan pesan sukses
      return redirect()->route('account.tambah_barang.index')->with(['success' => 'Data Berhasil Diupdate!']);
    } else {
      // Redirect dengan pesan error
      return redirect()->route('account.tambah_barang.index')->with(['error' => 'Data Gagal Diupdate!']);
    }
  }

  public function destroy($id)
  {
    $delete = TambahBarang::find($id)->delete($id);

    if ($delete) {
      return response()->json([
        'status' => 'success'
      ]);
    } else {
      return response()->json([
        'status' => 'error'
      ]);
    }
  }
}
