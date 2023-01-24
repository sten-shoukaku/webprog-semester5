<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function event_detail($id){
        $event = Event::find($id);

        $sections = DB::table('event_sections')
            ->where('event_id', '=', $event->id)
            ->get();

        return view('event_detail', compact('event', 'sections'));
    }

    public function vieworder() {
        $id = Auth::user->id();
        $transaction = DB::table('transactions')->join('users', 'users.id', '=', 'transactions.userId')
        ->join('events', 'events.id', '=', 'transactions.eventId')
        ->join('event_sections', 'event_sections', '=', 'transactions.sectionId')->where('userId', '=', $id)->get();
        return view('vieworder', compact('transaction'));
    }
}
