<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->level == 'manager') {
            // Jika user adalah 'manager', ambil semua data pengguna staff yang memiliki perusahaan yang sama dengan user
            $users = DB::table('users')
                ->where('company', $user->company)
                ->whereIn('level', ['staff', 'karyawan', 'trainer', 'manager'])
                ->orderBy('created_at', 'DESC')
                ->paginate(10);
        } else {
            // Jika user bukan 'manager', ambil hanya data pengguna itu sendiri
            $users = DB::table('users')
                ->orderBy('created_at', 'DESC')
                ->paginate(10);
        }



        return view('account.pengguna.index', compact('users'));
    }

    public function search(Request $request)
    {
        $search = $request->get('q');
        $user = Auth::user();

        $users = DB::table('users')
            ->where('company', $user->company)
            ->whereIn('level', ['staff', 'karyawan', 'trainer', 'manager'])
            ->orderBy('created_at', 'DESC')
            ->where(function ($query) use ($search) {
                $query->where('users.full_name', 'LIKE', '%' . $search . '%')
                    ->orWhere('users.email', 'LIKE', '%' . $search . '%')
                    ->orWhere('users.username', 'LIKE', '%' . $search . '%')
                    ->orWhere('users.email_verified_at', 'LIKE', '%' . $search . '%')
                    ->orWhere('users.jenis', 'LIKE', '%' . $search . '%')
                    ->orWhere('users.level', 'LIKE', '%' . $search . '%')
                    ->orWhere('users.status', 'LIKE', '%' . $search . '%');
            })
            ->orderBy('users.created_at', 'DESC')
            ->paginate(10);
        $users->appends(['q' => $search]);


        if ($users->isEmpty()) {
            return redirect()->route('account.pengguna.index')->with('error', 'Data Pengguna tidak ditemukan.');
        }




        return view('account.pengguna.index', compact('users'));
    }

    public function create()
    {
        return view('account.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'company' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email'), // Check email uniqueness in the 'users' table
            ],
            'username' => [
                'required',
                Rule::unique('users', 'username'), // Check username uniqueness in the 'users' table
            ],
            'password' => 'required',
            'level' => 'required',
            'jenis' => 'required',
            'telp' => 'required',
            'nik' => 'required',
            'norek' => 'required',
            'bank' => 'required',
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

        if ($validator->fails()) {
            return redirect()->route('account.pengguna.create')
                ->withErrors($validator)
                ->withInput();
        }


        // Create a new user instance
        $user = new User();
        $user->full_name = $request->input('full_name');
        $user->company = $request->input('company');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->level = $request->input('level');
        $user->jenis = $request->input('jenis');
        $user->telp = $request->input('telp');
        $user->notif = $request->input('notif');
        $user->tenggat = $request->input('tenggat');
        $user->title = $request->input('title');
        $user->nik = $request->input('nik');
        $user->norek = $request->input('norek');
        $user->bank = $request->input('bank');
        $user->jobdesk = $request->input('jobdesk');
        $user->email_verified_at = $request->input('email_verified_at') ? now() : null;

        if ($request->input('status')) {
            $user->status = 'on';
        } else {
            $user->status = 'off';
        }

        // Save the new user
        $user->save();

        // Redirect with success message
        return redirect()->route('account.pengguna.index')->with('success', 'Data pengguna berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('account.pengguna.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $user = User::findOrFail($id);

        return view('account.pengguna.detail', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'full_name' => 'required',
            'company' => '',
            'email' => 'required|email',
            'username' => 'required',
            'level' => 'required',
            'jenis' => 'required',
            'telp' => 'required',
            'jobdesk' => 'required',
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update user data
        $user->full_name = $request->input('full_name');
        $user->company = $request->input('company');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->level = $request->input('level');
        $user->jenis = $request->input('jenis');
        $user->telp = $request->input('telp');
        $user->notif = $request->input('notif');
        $user->tenggat = $request->input('tenggat');
        $user->title = $request->input('title');
        $user->nik = $request->input('nik');
        $user->norek = $request->input('norek');
        $user->bank = $request->input('bank');
        $user->jobdesk = $request->input('jobdesk');
        $user->email_verified_at = $request->input('email_verified_at') ? now() : null;

        if ($request->input('status')) {
            $user->status = 'on';
        } else {
            $user->status = 'off';
        }

        // Check if password is being updated
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        // Save the updated user data
        $user->save();

        // Redirect with success message
        return redirect()->route('account.pengguna.index')->with('success', 'Data pengguna berhasil diperbarui!');
    }
    public function destroy($id)
    {
        // Find the user by ID
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            return redirect()->route('account.pengguna.index')->with('error', 'Pengguna tidak ditemukan');
        }

        // Delete the user
        $user->delete();

        // Redirect with success message
        return redirect()->route('account.pengguna.index')->with('success', 'Data pengguna berhasil dihapus!');
    }

    public function resetPassword(Request $request)
    {
        // Validate the request data
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user(); // Get the authenticated user

        // Check if the old password matches the user's current password
        // ... You can add your old password check logic here if needed

        // Update the user's password with the new one
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->with('success', 'Password berhasil diubah'); // Redirect to the desired route
    }

    public function password($id)
    {
        $user = User::findOrFail($id);



        return view('account.profil.resetpassword', compact('user'));
    }

    public function company($id)
    {
        $user = User::findOrFail($id);



        return view('account.company.index', compact('user'));
    }
    public function updateCompany(Request $request, $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Validate the request data (uncomment and modify as needed)
        // $request->validate([
        //     'full_name' => 'required',
        //     'company' => '',
        //     'email' => 'required|email',
        //     'username' => 'required',
        //     'level' => 'required',
        //     'jenis' => 'required',
        //     'telp' => 'required',
        // ]);

        // Save image to path if provided
        if ($request->hasFile('logo_company')) {
            $image = $request->file('logo_company');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $imageName;
            $image->move(public_path('images'), $imageName); // Store the image
        } else {
            // If no new image uploaded, keep using the old image path
            $imagePath = $user->logo_company;
        }

        // Update user data
        $user->update([
            'company' => $request->input('company'),
            'alamat_company' => $request->input('alamat_company'),
            'telp_company' => $request->input('telp_company'),
            'email_company' => $request->input('email_company'),
            'pj_company' => $request->input('pj_company'),
            'logo_company' => $imagePath ?? null,
        ]);

        // If the user is a manager, update the company data for employees in the same company
        if ($user->level === 'manager') {
            $managerCompany = $user->company;

            // Update company data for all users with the same company
            User::where('company', $managerCompany)->update([
                'alamat_company' => $request->input('alamat_company'),
                'telp_company' => $request->input('telp_company'),
                'email_company' => $request->input('email_company'),
                'pj_company' => $request->input('pj_company'),
                'logo_company' => $imagePath ?? null,
            ]);
        }

        // Redirect with success message
        return redirect()->route('account.company.edit', $user->id)->with('success', 'Data pengguna berhasil diperbarui!');
    }
}
