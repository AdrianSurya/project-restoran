<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        // kalau sudah login, langsung ke admin.menu
        if (session()->has('admin_id')) {
            return redirect()->route('admin.home.menu');
        }
        return view('admin.auth.logins');

    }

        public function profile()
    {
        // Pastikan admin sudah login
        if (!session()->has('admin_id')) {
            return redirect()->route('login');
        }

        $admin = Admin::find(session('admin_id'));
        return view('admin.profile', compact('admin'));
    }


    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

    

        // dd($request);

        $admin = Admin::where('username', $request->username)->first();

        if (Hash::check($request->password, $admin->password) && $admin->role === 'admin') {
            // simpan session
            session([
                'admin_id' => $admin->Id_admin,
                'role'     => $admin->role
            ]);

            return redirect()->route('admin.home.menu'); // pindah ke menu admin
        }

        return back()->withErrors(['login_error' => 'Username atau Password salah / bukan admin']);
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
