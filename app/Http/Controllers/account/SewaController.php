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

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $users = DB::table('users')
            ->whereNotNull('tenggat') // Exclude rows with tenggat as null
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $maintenances = DB::table('maintenance')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('account.sewa.index', compact('users', 'maintenances'));
    }


    public function search(Request $request)
    {
        $search = $request->get('q');
        $user = Auth::user();

        $users = DB::table('users')
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

        $maintenances = DB::table('maintenance')
            ->orderBy('created_at', 'DESC')
            ->get();


        return view('account.sewa.index', compact('users', 'maintenances'));
    }

    public function create()
    {
        $user = Auth::user();
        $uniqueCompanyNames = User::select('company')->distinct()->pluck('company');

        return view('account.sewa.create', compact('uniqueCompanyNames'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company' => 'required',
            // Other validation rules...
        ], [
            'company.required' => 'Pilih sebuah perusahaan!',
            // Other custom error messages...
        ]);

        if ($validator->fails()) {
            return redirect()->route('account.sewa.create')
                ->withErrors($validator)
                ->withInput();
        }

        // Check if a user with the same company already exists
        $existingUser = User::where('company', $request->input('company'))->first();

        if ($existingUser) {
            // Update tenggat for users with the same company
            User::where('company', $request->input('company'))
                ->update(['tenggat' => $request->input('tenggat')]);
        } else {
            // Create a new user instance
            $user = new User();
            // Populate user data
            // ...

            // Save the new user
            $user->save();
        }

        // Redirect with success message
        return redirect()->route('account.sewa.index')->with('success', 'Data notifikasi sewa berhasil ditambahkan!');
    }
}
