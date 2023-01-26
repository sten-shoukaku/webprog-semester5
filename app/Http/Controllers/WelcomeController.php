<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class WelcomeController extends Controller
{
    // 
    // 
    // 
    // 
    // 
    // 
    // 
    // 
    // UI/UX Developer, Director : 2440039146 Steffi Soeroredjo, www.figma.com/file/rjOYJhQ47uy37GNg2ghn96/On-Tick?node-id=0%3A1&t=jtGy9w7TvMeSTPuC-0
    // Github Controller/Mentor and Front End Developer : 2440004653 Stanly Bianconeri
    // Front End Developer : 2440003726 Giancarlo Casanova, 2440021376 Denzel Caesarian Iswanto Suhardjo
    // Back End Developer and Web Hosting : 2440029744 Ferdinandus Dipokusuma Tandiono
    // Back End Developer : 2440003991 Aldo Anthonius, 2440047873 Edbert Felix Fangasadha
    // 
    // 
    // 
    // 
    // 
    // 
    // 
    // 
    // 

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
            'username'=> 'required|min:3|max:20',
            'email'=> 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:20',
            'confirmPassword'=> 'required|min:5|max:20|same:password',
            'phone'=> 'required|min:10|max:13'
        ]);
        $dataValid['password'] = Hash::make($dataValid['password']);
        $dataValid['confirmPassword'] = Hash::make($dataValid['confirmPassword']);
        User::create($dataValid);
        return redirect('/signin')->with('success', 'Registration Success, Please Login');

    }
}
