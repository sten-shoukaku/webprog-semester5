<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function edit() {
        return view('editevent');
    }

    public function addevent() {
        return view('addevent');
    }

    public function addsection() {
        return view('addsection');
    }
}
