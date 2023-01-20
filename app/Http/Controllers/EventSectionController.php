<?php

namespace App\Http\Controllers;

use App\Models\EventSection;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventSectionController extends Controller
{
    public function order_section(Request $request){
        $id = $request->id;
        $section_id = $request->section_id;

        $event = Event::find($id);
        $event->date = Carbon::createFromFormat('Y-m-d', $event->date)->format('d F Y');
        $event->time = Carbon::createFromFormat('H:i:s', $event->time)->format('h.i');
        $event->open_gate = Carbon::createFromFormat('H:i:s', $event->open_gate)->format('h.i');

        $section = EventSection::find($section_id);

        return view('order_section', compact('event', 'section'));
    }
}
