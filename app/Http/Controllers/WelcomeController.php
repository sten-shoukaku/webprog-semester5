<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function authentication() {
        # Validation
        return view('dashboard');
    }

    public function store(Request $request) {
        # Validation
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:5|max:20',
            'confirm-password' => 'required|same:password',
            'phone-number' => 'required|numeric|digits_between:10,13',
        ];

        $messages = [
            'password.min' => 'Password must be minimum 5 letters.',
            'password.max' => 'Password must be maximum 20 letters.',
            'confirm-password.same' => 'Confirm Password must match Password',
            'phone-number.numeric' => 'Phone Number must be numbers.',
            'phone-number.digits_between' => 'Phone Number must be between 10 and 13 numbers.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        else{
            $request->session()->flash('signup-success', 'Registration successful, please Sign In.');

            return redirect('/');
        }
        
    }
}