<?php

namespace App\Http\Controllers\account;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Response;
use PDF;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
  // ...

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $user = User::find($id);

    // Jika data pengguna tidak ditemukan, redirect atau tampilkan pesan kesalahan
    if (!$user) {
      return redirect()->route('account.profil.index')->with('error', 'User not found.');
    }



    // Jika user adalah 'manager' dan pengguna memiliki perusahaan yang sama, atau jika user bukan 'manager' dan ID pengguna sesuai dengan ID user saat ini
    if (
      Auth::check() && Auth::user()->level == 'manager' && Auth::user()->company == $user->company ||
      Auth::check() && Auth::user()->id == $user->id
    ) {
      return view('account.profil.index', compact('user'));
    } else {
      return redirect()->route('account.profil.index')->with('error', 'Access denied.');
    }
  }

  public function update(Request $request, $id)
  {

    $user = User::find($id);
    // Validate the request data
    $request->validate([
      'full_name' => 'required',
      'company' => 'required',
      'username' => 'required',
      'telp' => 'required',
      'nik' => 'required',
      'norek' => 'required',
      'bank' => 'required',
      'gambar' => 'max:5120',
      'jobdesk' => 'required',
    ], [
      'full_name.required'   => 'Masukkan Nama Lengkap!',
      'company.required'  => 'Masukkan Nama Tempat Anda Bekerja!',
      'username.required'          => 'Masukkan Username Anda!',
      'telp.required'          => 'Masukkan No Telp Anda!',
      'nik.required'          => 'Masukkan NIK Anda!',
      'norek.required'          => 'Masukkan Nomor Rekening Anda!',
      'bank.required'          => 'Masukkan BANK Anda!',
      'gambar.max' => 'Ukuran gambar tidak boleh melebihi 5MB!',
      'jobdesk.required'          => 'Masukkan Jobdesk Anda!',
    ]);


    // Initialize the $imagePath variable

    //menyinpan image di path
    $imagePath = null;

    if ($request->hasFile('gambar')) {
      $image = $request->file('gambar');
      $imageName = time() . '.' . $image->getClientOriginalExtension();
      $imagePath = $imageName; // Sesuaikan dengan path yang telah didefinisikan di konfigurasi
      $image->move(public_path('images'), $imageName); // Pindahkan gambar ke direktori public/images
    }
    //end

    // Find the user by ID
    $user = User::findOrFail($id);
    $user->update([
      // Update user data
      'full_name' => $request->input('full_name'),
      'company' => $request->input('company'),
      'username' => $request->input('username'),
      'telp' => $request->input('telp'),
      'nik' => $request->input('nik'),
      'norek' => $request->input('norek'),
      'bank' => $request->input('bank'),
      'jobdesk' => $request->input('jobdesk'),
      'gambar' => $imagePath, // Update the image path
    ]);

    // Save the updated user data
    $user->save();

    return redirect()->route('account.profil.show', $user->id)->with('success', 'Data Diri Berhasil diperbarui!');
  }
}
