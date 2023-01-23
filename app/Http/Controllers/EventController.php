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

        $sections = DB::table('event_sections')
            ->where('event_id', '=', $event->id)
            ->get();
        return view('event_detail', compact('event', 'sections'));
    }
}
