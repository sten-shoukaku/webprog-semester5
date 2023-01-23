<?php

namespace App\Http\Controllers;

use App\Models\EventSection;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventSectionController extends Controller
{
    public function order_section(Request $request, $eventId, $sectionId){
        $event = Event::find($eventId);
        $section = EventSection::find($sectionId);

        return view('order_section', compact('event', 'section'));
    }
}
