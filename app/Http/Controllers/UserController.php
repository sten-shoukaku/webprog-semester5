<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile() {
        $user = Auth::user();
        return view ("profile", compact("user"));
    }

    public function editpassword() {
        $user = Auth::user();
        return view("editpassword", compact("user"));
    }

    public function changepassword(Request $request) {

        $user = Auth::user();

        // $dataValid = $request->validate([
        //     'oldpassword' => 'required',
        //     'newpassword'=> 'required|min:5|max:20',
        //     'confirmnewpassword'=> 'required|min:5|max:20'
        // ]);

        return dump(Hash::check($user->password, $request->oldpassword));

        if ($user->password == bcrypt($request->oldpassword))
        {
            return dump($user->password, 2440047873, []);
        }

        // DB::table('users')->where('id', '=', $user->id)->update([
        //     "password" => bcrypt($request->newpassword),
        //     "confirmPassword" => bcrypt($request->confirmnewpassword),
        // ]);

        // return redirect("/profile");
    }

    public function editprofile() {
        $user = Auth::user();
        return view("editprofile", compact("user"));
    }

    public function changeprofile(Request $request) {

        $id = Auth::user()->id;

        $dataValid = $request->validate([
            'email'=> 'required|email:dns|unique:users',
            'phone'=> 'required|min:10|max:13'
        ]);
        
        DB::table('users')->where('id', '=', $id)->update([
            "email" => $request->email,
            "phone" => $request->phone,
        ]);

        return redirect("/profile");
    }

    public function adminprofile() {
        $user = Auth::user();
        return view ("adminprofile", compact("user"));
    }

    public function admineditpassword() {
        $user = Auth::user();
        return view ("admineditpassword", compact("user"));
    }

    public function adminchangepassword(Request $request) {

        $user = Auth::user();

        return dump($request);

        // $dataValid = $request->validate([
        //     'oldpassword' => 'required',
        //     'newpassword'=> 'required|min:5|max:20',
        //     'confirmnewpassword'=> 'required|min:5|max:20'
        // ]);
        
        // DB::table('users')->where('id', '=', $user->id)->update([
        //     "password" => bcrypt($request->newpassword),
        //     "confirmPassword" => bcrypt($request->confirmnewpassword),
        // ]);

        // return redirect("/admin/profile");
    }
}
