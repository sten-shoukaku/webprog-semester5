<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
=======
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< Updated upstream
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        //
=======
    public function profile() {
        return view ("profile");
    }

    public function editpassword() {
        return view("editpassword");
    }

    public function editprofile() {
        return view("editprofile");
>>>>>>> Stashed changes
    }
}
