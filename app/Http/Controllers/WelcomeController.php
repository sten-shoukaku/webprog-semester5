<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function store() {
        # Validation
        return view('dashboard');
    }
}