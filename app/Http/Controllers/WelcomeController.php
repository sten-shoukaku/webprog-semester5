<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class WelcomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function signin() {
        return view('signin');
    }

    public function signup() {
        return view('signup');
    }

    public function authentication(Request $request) {
        # Validation
        $credentials = $request->validate([
            'email'=> 'required|email:dns',
            'password'=> 'required|min:5|max:20'
        ]);
        if($request->remember){
            Cookie::queue('getCookie', $request->email,10);
        }
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('loginFailed', 'Login Failed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function store(Request $request) {
        # Validation
        $dataValid = $request->validate([
            'email'=> 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:20',
            'confirmPassword'=> 'required|min:5|max:20|same:password',
            'phone'=> 'required|min:10|max:13'
        ]);
        $dataValid['password'] = Hash::make($dataValid['password']);
        $dataValid['confirmPassword'] = Hash::make($dataValid['confirmPassword']);
        User::create($dataValid);
        return redirect('/signin')->with('success', 'Registration Success');
    }
}
