<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'max:100'],
            'password' => ['required', 'string', 'min:8', 'max:100'],
        ]);

        $key = 'admin-login:'.$request->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) {
            throw ValidationException::withMessages([
                'email' => 'Terlalu banyak percobaan. Coba lagi setelah satu menit.',
            ]);
        }

        $email = (string) env('ADMIN_EMAIL', 'admin@mtnumkm.test');
        $password = (string) env('ADMIN_PASSWORD', 'admin12345');

        if (!hash_equals($email, $credentials['email']) ||
            !hash_equals($password, $credentials['password'])) {
            RateLimiter::hit($key, 60);
            throw ValidationException::withMessages([
                'email' => 'Email atau password tidak sesuai.',
            ]);
        }

        RateLimiter::clear($key);
        $request->session()->regenerate();
        $request->session()->put('is_admin', true);
        $request->session()->put('admin_email', $email);

        return redirect()->route('admin.dashboard')->with('success', 'Selamat datang di dashboard MTN.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['is_admin', 'admin_email']);
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Anda berhasil logout.');
    }
}
