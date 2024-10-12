<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Pastikan Anda memiliki model User
use Illuminate\Support\Facades\Auth; // Untuk autentikasi
use Illuminate\Support\Facades\Hash; // Untuk hashing password
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Show the registration form.
     */
    public function create()
    {
        return view('backend.Auth.Register'); // Ganti dengan nama view registrasi Anda
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
        ]);

        // Autentikasi pengguna setelah registrasi
        Auth::login($user);

        return redirect('/')->with('success', 'Akun Anda telah dibuat.'); // Ganti dengan rute tujuan setelah registrasi
    }

    /**
     * Show the login form.
     */
    public function login()
    {
        return view('backend.Auth.Login'); // Ganti dengan nama view login Anda
    }

    /**
     * Authenticate the user.
     */
    public function authenticate(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Cek kredensial pengguna
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/'); // Ganti dengan rute tujuan setelah login
        }

        throw ValidationException::withMessages([
            'email' => ['Kredensial yang diberikan tidak valid.'],
        ]);
    }

    /**
     * Logout the user.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Ganti dengan rute tujuan setelah logout
    }
}