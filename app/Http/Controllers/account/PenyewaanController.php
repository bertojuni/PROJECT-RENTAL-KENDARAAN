<?php

namespace App\Http\Controllers\account;

use App\TambahBarang;
use App\Penyewaan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Response;
use PDF;

class PenyewaanController extends Controller
{
  /**
   * PenyewaanController constructor.
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function generateRandomId($length)
  {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $id = '';
    for ($i = 0; $i < $length; $i++) {
      $id .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $id;
  }

  public function index()
  {
    $user = Auth::user();

    if ($user->level == 'manager' || $user->level == 'staff') {
      // Jika user adalah 'manager' atau 'staff', ambil semua data transaksi yang memiliki perusahaan yang sama dengan user
      $penyewaan = Penyewaan::select('penyewaan.*', 'tambah_barang.nama_barang')
        ->join('tambah_barang', 'penyewaan.tambah_barang_id', '=', 'tambah_barang.id')
        ->join('users', 'penyewaan.user_id', '=', 'users.id')
        ->where('users.company', $user->company)
        ->orderBy('penyewaan.created_at', 'DESC')
        ->paginate(10);
    } else {
      // Jika user bukan 'manager' atau 'staff', ambil hanya data transaksi miliknya sendiri
      $penyewaan = Penyewaan::select('penyewaan.*', 'tambah_barang.nama_barang')
        ->join('tambah_barang', 'penyewaan.tambah_barang_id', '=', 'tambah_barang.id')
        ->where('penyewaan.user_id', $user->id)
        ->orderBy('penyewaan.created_at', 'DESC')
        ->paginate(10);
    }



    return view('account.penyewaan.index', compact('penyewaan'));
  }


  public function search(Request $request)
  {
    $search = $request->get('q');
    $user = Auth::user();

    $penyewaan = Penyewaan::select('penyewaan.*', 'tambah_barang.nama_barang')
      ->join('tambah_barang', 'penyewaan.tambah_barang_id', '=', 'tambah_barang.id')
      ->join('users', 'penyewaan.user_id', '=', 'users.id')
      ->where(function ($query) use ($search) {
        $query->where('tambah_barang.nama_barang', 'LIKE', '%' . $search . '%')
          ->orWhere('penyewaan.nama', 'LIKE', '%' . $search . '%')
          ->orWhere('penyewaan.telp', 'LIKE', '%' . $search . '%')
          ->orWhere('penyewaan.alamat', 'LIKE', '%' . $search . '%')
          ->orWhere('penyewaan.id_transaksi', 'LIKE', '%' . $search . '%')
          ->orWhere('penyewaan.tanggal', 'LIKE', '%' . $search . '%')
          ->orWhere('penyewaan.status', 'LIKE', '%' . $search . '%')
          ->orWhere('penyewaan.identitas', 'LIKE', '%' . $search . '%');
      });

    if ($user->level == 'manager' || $user->level == 'staff') {
      // If the user is 'manager' or 'staff', filter by company
      $penyewaan->where('users.company', $user->company);
    } else {
      // If the user is not 'manager' or 'staff', filter by user_id
      $penyewaan->where('penyewaan.user_id', $user->id);
    }

    $penyewaan = $penyewaan->orderBy('penyewaan.created_at', 'DESC')
      ->paginate(10);

    return view('account.penyewaan.index', compact('penyewaan'));
  }



  public function create()
  {
    $user = Auth::user();
    if ($user->level == 'manager' || $user->level == 'staff') {
      $tambahBarang = TambahBarang::join('users', 'tambah_barang.user_id', '=', 'users.id')
        ->where('users.company', $user->company)
        ->get(['tambah_barang.*']);

      return view('account.penyewaan.create', compact('tambahBarang'));
    } else {
      $tambahBarang = TambahBarang::where('user_id', Auth::user()->id)
        ->get();
      return view('account.penyewaan.create', compact('tambahBarang'));
    }
  }
  public function store(Request $request)
  {
    $user = Auth::user();

    $id_transaksi = $this->generateRandomId(5);

    $this->validate(
      $request,
      [
        'tambah_barang_id' => 'required',
        'nama' => 'required',
        'email' => 'required',
        'telp' => 'required',
        'alamat' => 'required',
        'identitas' => 'required',
        'jumlah' => 'required|min:1', // Ensure jumlah is a positive number
        'tanggal' => 'required',
        'status' => 'required',
        'jaminan' => 'required',
        'lama_peminjaman' => 'required|min:1',
        'jenis_pembayaran' => 'required',
      ],
      [
        'nama.required' => 'Masukkan Nama Peminjam!',
        'email.required' => 'Masukan Email Peminjam!',
        'telp.required' => 'Masukan Telp Peminjam!',
        'alamat.required' => 'Masukkan Alamat Peminjam!',
        'identitas.required' => 'Masukkan Identitas Peminjam!',
        'jumlah.required' => 'Masukkan Jumlah kendaaraan yang Dipinjam!',
        'jumlah.min' => 'Jumlah kendaaraan harus lebih dari 0!',
        'tanggal.required' => 'Masukkan Tanggal Peminjam!',
        'lama_peminjaman.min' => 'Lama Peminjaman kendaaraan harus lebih dari 0!',
        'lama_peminjaman.required' => 'Masukkan Lama Peminjaman kendaaraan!',
        'status.required' => 'Silahkan Pilih Status Kendaraan!',
        'jaminan.required' => 'Silahkan Pilih Jaminan Kendaraan!',
        'jenis_pembayaran.required' => 'Silahkan Pilih Jenis Pembayaran!',
      ]
    );

    $tambahBarang = TambahBarang::find($request->input('tambah_barang_id'));
    if (!$tambahBarang) {
      return redirect()->back()->with(['status' => 'error', 'message' => 'Data Kendaraan Tidak Ditemukan!']);
    }

    if ($tambahBarang->stok < $request->input('jumlah')) {
      return redirect()->back()->with(['status' => 'error', 'message' => 'Stok kendaraan tidak mencukupi!']);
    }

    // Calculate subtotal based on harga_barang * jumlah
    $subtotal = $tambahBarang->harga_barang * $request->input('jumlah') * $request->input('lama_peminjaman');

    // Update stok of the selected kendaraan
    $tambahBarang->stok -= $request->input('jumlah');
    $tambahBarang->save();
    $diskon = $request->input('diskon');
    $diskon = empty($diskon) ? 0 : str_replace(",", "", $diskon); // Convert to numeric value or set to 0 if empty

    $jumlah_pembayaran = $request->input('jumlah_pembayaran');
    $jumlah_pembayaran = empty($jumlah_pembayaran) ? 0 : str_replace(",", "", $jumlah_pembayaran);

    $total = $subtotal - $diskon;
    $kekurangan_pembayaran = $total - $jumlah_pembayaran;

    if ($request->input('jenis_pembayaran') === 'lunas') {
      $kekurangan_pembayaran = 0;
    }

    // Buat data transaksi baru
    $save = Penyewaan::create([
      'id_transaksi' => $id_transaksi,
      'user_id' => Auth::user()->id,
      'tambah_barang_id' => $request->input('tambah_barang_id'),
      'nama' => $request->input('nama'),
      'email' => $request->input('email'),
      'telp' => $request->input('telp'),
      'alamat' => $request->input('alamat'),
      'identitas' => $request->input('identitas'),
      'jumlah' => $request->input('jumlah'),
      'lama_peminjaman' => $request->input('lama_peminjaman'),
      'tanggal' => $request->input('tanggal'),
      'pengembalian' => $request->input('pengembalian'),
      'status' => $request->input('status'),
      'jaminan' => $request->input('jaminan'),
      'subtotal' => $subtotal, // Set the calculated subtotal
      'total' => $total, // Calculate the total by subtracting diskon from subtotal
      'diskon' => $diskon,
      'jenis_pembayaran' => $request->input('jenis_pembayaran'),
      'kekurangan_pembayaran' => $kekurangan_pembayaran, // Calculate kekurangan_pembayaran
      'jumlah_pembayaran' => $jumlah_pembayaran,
    ]);

    // Redirect with success or error message
    if ($save) {
      // Get the ID of the newly created data
      $penyewaanId = $save->id;

      // Redirect to the detail page for the newly created data with SweetAlert notification
      return Redirect::route(
        'account.penyewaan.detail',
        ['id' => $penyewaanId]
      )->with('success', 'Data Berhasil Disimpan!');
    } else {
      // Redirect with an error message if data creation fails
      return redirect()->route('account.penyewaan.index')->with('error', 'Data Gagal Disimpan!');
    }
  }

  public function detail($id)
  {
    $penyewaan = Penyewaan::findOrFail($id);
    $user = Auth::user();

    if ($user->level == 'manager' || $user->level == 'staff') {
      $tambahBarang = TambahBarang::join('users', 'tambah_barang.user_id', '=', 'users.id')
        ->where('users.company', $user->company)
        ->get(['tambah_barang.*']);

      return view('account.penyewaan.detail', compact('penyewaan', 'tambahBarang'));
    } else {
      $tambahBarang = TambahBarang::where('user_id', Auth::user()->id)
        ->get();
      return view('account.penyewaan.detail', compact('penyewaan', 'tambahBarang'));
    }
  }

  public function edit($id)
  {
    $user = Auth::user();
    $penyewaan = Penyewaan::findOrFail($id);

    if ($user->level == 'manager' || $user->level == 'staff') {
      $tambahBarang = TambahBarang::join('users', 'tambah_barang.user_id', '=', 'users.id')
        ->where('users.company', $user->company)
        ->get(['tambah_barang.*']);
    } else {
      $tambahBarang = TambahBarang::where('user_id', Auth::user()->id)->get();
    }

    return view('account.penyewaan.edit', compact('penyewaan', 'tambahBarang'));
  }

  public function update(Request $request, $id)
  {
    $user = Auth::user();

    $penyewaan = Penyewaan::findOrFail($id);

    $this->validate(
      $request,
      //[
      //  'tambah_barang_id' => 'required',
      //  'nama' => 'required',
      //  'email' => 'required',
      //  'telp' => 'required',
      //  'alamat' => 'required',
      //  'identitas' => 'required',
      //  'jumlah' => 'required|min:1', // Ensure jumlah is a positive number
      //  'tanggal' => 'required',
      //  'lama_peminjaman' => 'required|min:1',
      //],
      [
        'nama.required' => 'Masukkan Nama Peminjam!',
        'email.required' => 'Masukan Email Peminjam!',
        'telp.required' => 'Masukan Telp Peminjam!',
        'alamat.required' => 'Masukkan Alamat Peminjam!',
        'identitas.required' => 'Masukkan Identitas Peminjam!',
        'jumlah.required' => 'Masukkan Jumlah kendaaraan yang Dipinjam!',
        'jumlah.min' => 'Jumlah kendaaraan harus lebih dari 0!',
        'tanggal.required' => 'Masukkan Tanggal Peminjam!',
        'jumlah.min' => 'Lama Peminjaman kendaaraan harus lebih dari 0!',
        'jumlah.required' => 'Masukkan Lama Peminjaman kendaaraan!',
      ]
    );

    $tambahBarang = TambahBarang::find($request->input('tambah_barang_id'));
    if (!$tambahBarang) {
      return redirect()->back()->with(['status' => 'error', 'message' => 'Data Kendaraan Tidak Ditemukan!']);
    }

    if ($tambahBarang->stok < $request->input('jumlah')) {
      return redirect()->back()->with(['status' => 'error', 'message' => 'Stok kendaraan tidak mencukupi!']);
    }

    // Calculate subtotal based on harga_barang * jumlah
    $subtotal = $tambahBarang->harga_barang * $request->input('jumlah') * $request->input('lama_peminjaman');

    // Update stok of the selected kendaraan

    $diskon = $request->input('diskon');
    $diskon = empty($diskon) ? 0 : str_replace(",", "", $diskon); // Convert to numeric value or set to 0 if empty

    $jumlah = $request->input('jumlah');
    $oldStok = $tambahBarang->stok;

    $jumlah_pembayaran = $request->input('jumlah_pembayaran');
    $jumlah_pembayaran = empty($jumlah_pembayaran) ? 0 : str_replace(",", "", $jumlah_pembayaran);

    $total = $subtotal - $diskon;
    $kekurangan_pembayaran = $total - $jumlah_pembayaran;

    if ($request->input('status') === 'dikembalikan') {
      $tambahBarang->stok += $jumlah;
    }

    if ($tambahBarang->stok !== $oldStok) {
      $tambahBarang->save();
    } else {
      $tambahBarang->stok -= $jumlah;
    }
    if ($request->input('jenis_pembayaran') === 'lunas') {
      $kekurangan_pembayaran = 0;
    }
    // Update data transaksi
    $penyewaan->update([
      'user_id' => Auth::user()->id,
      'tambah_barang_id' => $request->input('tambah_barang_id'),
      'nama' => $request->input('nama'),
      'email' => $request->input('email'),
      'telp' => $request->input('telp'),
      'alamat' => $request->input('alamat'),
      'identitas' => $request->input('identitas'),
      'jumlah' => $request->input('jumlah'),
      'lama_peminjaman' => $request->input('lama_peminjaman'),
      'tanggal' => $request->input('tanggal'),
      'pengembalian' => $request->input('pengembalian'),
      'status' => $request->input('status'),
      'jaminan' => $request->input('jaminan'),
      'subtotal' => $subtotal, // Set the calculated subtotal
      'total' => $total, // Calculate the total by subtracting diskon from subtotal
      'diskon' => $diskon,
      'jenis_pembayaran' => $request->input('jenis_pembayaran'),
      'kekurangan_pembayaran' => $kekurangan_pembayaran,
      'jumlah_pembayaran' => $jumlah_pembayaran,
    ]);


    // Redirect with success or error message
    if ($penyewaan) {
      // Redirect to the detail page for the updated data with SweetAlert notification
      return Redirect::route('account.penyewaan.detail', ['id' => $id])->with('success', 'Data Berhasil Diupdate!');
    } else {
      // Redirect with an error message if data update fails
      return redirect()->route('account.penyewaan.index')->with('error', 'Data Gagal Diupdate!');
    }
  }

  public function destroy($id)
  {
    $penyewaan = Penyewaan::find($id);
    if ($penyewaan) {
      $penyewaan->delete();
      return response()->json(['status' => 'success', 'message' => 'Data Berhasil Dihapus!']);
    } else {
      return response()->json(['status' => 'error', 'message' => 'Data Gagal Dihapus!']);
    }
  }

  public function downloadPdf(Request $request)
  {
    // Fetch data based on the given date range
    $user = Auth::user();
    $currentMonthStart = date('Y-m-01 00:00:00'); // First day of the current month
    $currentMonthEnd = date('Y-m-t 23:59:59'); // Last


    if (
      $user->level == 'manager' || $user->level == 'staff'
    ) {
      // Jika user adalah 'manager' atau 'staff', ambil semua data transaksi yang memiliki perusahaan yang sama dengan user
      $penyewaan = Penyewaan::select('penyewaan.*', 'tambah_barang.nama_barang')
        ->join('tambah_barang', 'penyewaan.tambah_barang_id', '=', 'tambah_barang.id')
        ->join('users', 'penyewaan.user_id', '=', 'users.id')
        ->where('users.company', $user->company)
        ->whereBetween('penyewaan.created_at', [$currentMonthStart, $currentMonthEnd])
        ->orderBy('penyewaan.created_at', 'DESC')
        ->get();
    } else {
      // Jika user bukan 'manager' atau 'staff', ambil hanya data transaksi miliknya sendiri
      $penyewaan = Penyewaan::select('penyewaan.*', 'tambah_barang.nama_barang')
        ->join('tambah_barang', 'penyewaan.tambah_barang_id', '=', 'tambah_barang.id')
        ->where('penyewaan.user_id', $user->id)
        ->whereBetween('penyewaan.created_at', [$currentMonthStart, $currentMonthEnd])
        ->orderBy('penyewaan.created_at', 'DESC')
        ->get();
    }

    // Get the Blade view content as HTML
    $html = view('account.penyewaan.index_pdf', compact('penyewaan'))->render();

    // Generate PDF using the HTML content
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // (Optional) Set paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the PDF
    $dompdf->render();

    // Set the PDF filename
    $fileName = 'laporan_penyewaan_' . date('d-m-Y') . '.pdf';

    // Output the generated PDF to the browser
    return $dompdf->stream($fileName);
  }

  public function detailPDF($id)
  {
    // Retrieve the data based on the provided ID
    $user = Auth::user();
    $penyewaan = Penyewaan::findOrFail($id);
    $tambahBarang = TambahBarang::where('user_id', Auth::user()->id)->get();

    // Generate the PDF using the 'pdf-detail' blade view and the retrieved data
    $pdf = PDF::loadView(
      'account.penyewaan.pdf-detail',
      compact('penyewaan', 'tambahBarang')
    );

    // Return the PDF content to be downloaded
    return $pdf->download('detail_penyewaan_' . $id . '.pdf');
  }
}
