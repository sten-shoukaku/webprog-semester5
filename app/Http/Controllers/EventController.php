<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Carbon\Carbon;

class EventController extends Controller
{
    public function event_detail($id){
        $event = Event::find($id);
        $event->date = Carbon::createFromFormat('Y-m-d', $event->date)->format('d F Y');
        $event->time = Carbon::createFromFormat('H:i:s', $event->time)->format('h.i');
        $event->open_gate = Carbon::createFromFormat('H:i:s', $event->open_gate)->format('h.i');
        return view('event_detail', compact('event'));
    }
}
