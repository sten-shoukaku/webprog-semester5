<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile() {
        // $user = Auth::user()->id;
        $user = DB::table("users")->where("id", "=", "1")->first();
        return view ("profile", compact("user"));
    }

    public function editpassword() {
        // $user = Auth::user()->id;
        $user = DB::table("users")->where("id", "=", "1")->first();
        return view("editpassword", compact("user"));
    }

    public function changepassword(Request $request) {
        $dataValid = $request->validate([
            'newpassword'=> 'required|min:5|max:20',
            'confirmnewpassword'=> 'required|min:5|max:20'
        ]);
        
        DB::table('users')->where('id', '=', '1')->update([
            "password" => $request->newpassword,
            "confirmPassword" => $request->confirmnewpassword,
        ]);

        return redirect("/profile");
    }

    public function editprofile() {
        // $user = Auth::user()->id;
        $user = DB::table("users")->where("id", "=", "1")->first();
        return view("editprofile", compact("user"));
    }

    public function changeprofile(Request $request) {
        $dataValid = $request->validate([
            'email'=> 'required|email:dns|unique:users',
            'phone'=> 'required|min:10|max:13'
        ]);
        
        DB::table('users')->where('id', '=', '1')->update([
            "email" => $request->email,
            "phone" => $request->phone,
        ]);

        return redirect("/profile");
    }

    public function adminprofile() {
        $user = DB::table("users")->where("id", "=", "2")->first();
        return view ("adminprofile", compact("user"));
    }

    public function admineditpassword() {
        $user = DB::table("users")->where("id", "=", "2")->first();
        return view ("admineditpassword", compact("user"));
    }

    public function adminchangepassword(Request $request) {
        $dataValid = $request->validate([
            'newpassword'=> 'required|min:5|max:20',
            'confirmnewpassword'=> 'required|min:5|max:20'
        ]);
        
        DB::table('users')->where('id', '=', '2')->update([
            "password" => $request->newpassword,
            "confirmPassword" => $request->confirmnewpassword,
        ]);

        return redirect("/admin/profile");
    }
}
