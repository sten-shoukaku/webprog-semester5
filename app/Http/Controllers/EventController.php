<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function event_detail($id){
        $event = Event::find($id);
        $event->date = Carbon::createFromFormat('Y-m-d', $event->date)->format('d F Y');
        $event->time = Carbon::createFromFormat('H:i:s', $event->time)->format('h.i');
        $event->open_gate = Carbon::createFromFormat('H:i:s', $event->open_gate)->format('h.i');

        $sections = DB::table('event_sections')
            ->where('event_id', '=', $event->id)
            ->get();
        return view('event_detail', compact('event', 'sections'));
    }
}
