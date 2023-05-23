<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Personil;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Login
    public function login_view()
    {
        return view('auth.login');
    }

    public function login_auth(Request $request)
    {
        $credentials = $request->validate([
            'nrp_nip' => ['required', 'string'],
            'password' => ['required'],
        ], [
            'nrp_nip.required' => 'NRP/NIP harus diisi.',
            'password.required' => 'Password harus diisi.',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->status != 'active') {
                Auth::logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                Toastr::error('Akun anda belum aktif, silahkan hubungi admin.', 'Gagal Login', ["positionClass" => "toast-top-right"]);
                return redirect()->intended('login');
            }
            $request->session()->regenerate();
            Toastr::success('Selamat datang, ' . Auth::user()->name . '.', 'Berhasil Login', ["positionClass" => "toast-top-right"]);
            return redirect()->intended('admin');
        }
        Toastr::error('NRP/NIP atau Password salah.', 'Gagal Login', ["positionClass" => "toast-top-right"]);
        return back();
    }

    // End Login

    // Register
    public function register_view()
    {
        $personil = Personil::all()->where('nama', '!=', null)->where('keterangan', '!=', 'PENSIUN');
        return view('auth.register');
    }

    public function register_auth(Request $request)
    {

        $validated = $request->validate(
            [
                'name' => ['string', 'max:255'],
                'nrp_nip' => ['required', 'string', 'max:255', 'unique:users'],
                'jabatan' => ['string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8',],
                'role' => ['required'],

            ],
            [

                'nrp_nip.required' => 'NRP/NIP harus diisi.',
                'nrp_nip.unique' => 'NRP/NIP sudah terdaftar.',
                'email.required' => 'Email harus diisi.',
                'email.unique' => 'Email sudah terdaftar.',
                'password.required' => 'Password harus diisi.',
                'password.min' => 'Password minimal 8 karakter.',
                'role.required' => 'Role harus diisi.',

            ]
        );
        // $matching = DB::table('personils')->select('nrp_nip', 'jabatan', 'nama')->where('nama', '!=', null)->get();
        $personil = Personil::all()->where('nama', '!=', null)->where('keterangan', '!=', 'PENSIUN');

        if ($personil->where('nrp_nip', $validated['nrp_nip'])->count() == 0) {
            Toastr::error('NRP/NIP tidak terdaftar.', 'Gagal', ["positionClass" => "toast-top-right"]);
            return back();
        }
        $validated['name'] = $personil->where('nrp_nip', $validated['nrp_nip'])->first()->nama;
        $validated['jabatan'] = $personil->where('nrp_nip', $validated['nrp_nip'])->first()->jabatan;
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        Toastr::success('Akun berhasil dibuat, silahkan login.', 'Berhasil', ["positionClass" => "toast-top-right"]);
        return redirect()->route('admin.kelola.akun.semua');



        // End Register
    }
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
