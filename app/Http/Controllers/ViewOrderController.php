<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewOrderController extends Controller
{
    //
    public function index() {
        return view('vieworder');
    }
}
