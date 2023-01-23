<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile() {
        return view ("profile");
    }

    public function editpassword() {
        return view("editpassword");
    }

    public function editprofile() {
        return view("editprofile");
    }
}
