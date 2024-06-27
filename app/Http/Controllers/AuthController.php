<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    //login 
    public function login(){
        return view('auth.login');
    }

    public function processlogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate(); 
            return redirect('user/dashboard');
        }
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate(); 
            return redirect('admin/dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function register(){
        return view('auth.register');
    }
    public function registerProcess(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'alamat' => ['required'],
            'tanggal_lahir' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/login')->with('toast_success', 'Berhasil mendaftarkan akun!');
    }
}
