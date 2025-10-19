<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    /**
     * Menampilkan halaman form registrasi.
     */
    public function showRegistrationForm(): View
    {
        return view('auth.register');
    }

    /**
     * Memproses data registrasi, membuat user baru, dan memberikan role.
     */
    public function register(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:15', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // 2. Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        // 3. Berikan role 'pelanggan' secara otomatis
        // Pastikan role ini sudah ada dari seeder Anda
        $customerRole = Role::findByName('pelanggan', 'web');
        if ($customerRole) {
            $user->assignRole($customerRole);
        }

        // 4. Login user yang baru dibuat
        Auth::login($user);

        // 5. Redirect ke halaman utama setelah berhasil register
        return redirect()->route('home');
    }
}
