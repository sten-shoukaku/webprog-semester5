<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index() {
        $events = Event::Paginate(6);
        return view('homepage', compact('events'));
    }

    public function index_admin() {
        $events = Event::Paginate(6);
        return view('homepage_admin', compact('events'));
    }
}
