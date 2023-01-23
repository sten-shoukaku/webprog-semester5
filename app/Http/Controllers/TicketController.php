<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    // Event
    
    public function addEvent() {
        return view('addevent');
    }

    public function addEventDetail(Request $request){
        $rules = [
            'banner' => 'required|mimes:jpg,png,jpeg',
            'eventName' => 'required',
            'eventLoc'=> 'required',
            'eventDate' => 'required',
            'eventDesc' => 'required',
            'opHour' => 'required',
            'section' => 'required',
            'price' => 'required|numeric',
            'ticketQty' => 'required|numeric',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            $image = $request->file('banner');
            $imageName = $image->getClientOriginalName();
            Storage::putFileAs('public/images', $image, $imageName);

            DB::table('events')->insert([
                'image' => $imageName,
                'name' => $request->eventName,
                'location' => $request->eventLoc,
                'date' => $request->eventDate,
                'description' => $request->eventDesc,
                'open_hour' => $request->opHour,
            ]);

            $eventId = DB::table('events')->latest('id')->first();
            $eventId = json_decode( json_encode($eventId), true);
            $eventId = $eventId['id'];

            DB::table('event_sections')->insert([
                'event_id' =>$eventId,
                'name' => $request->section,
                'price' => $request->price,
                'stock' => $request->ticketQty,
            ]);

            return redirect()->route('editEvent', [$eventId]);
        }
        
    }

    public function editEvent(Request $request, $eventId) {
        $event = DB::table('events')->where('id', '=', $eventId)->first();
        $eventSection = DB::table('event_sections')->where('event_id', '=', $eventId)->get();

        return view('editevent')->with(compact('event', 'eventSection'));
    }

    public function removeEvent(Request $request, $eventId){
        DB::table('events')->where('id', '=', $eventId)->delete();

        $events = Event::Paginate(6);
        return redirect('/admin/home')->with(compact('events'));
    }

    // Section

    public function addSection(Request $request, $id) {
        return view('addsection')->with('eventId', $id);
    }

    public function addSectionDetail(Request $request, $eventId) {
        $rules = [
            'section' => 'required',
            'price' => 'required|numeric',
            'ticketQty' => 'required|numeric',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            DB::table('event_sections')->insert([
                'event_id' =>$eventId,
                'name' => $request->section,
                'price' => $request->price,
                'stock' => $request->ticketQty,
            ]);
    
            return redirect()->route('editEvent', [$eventId]);
        } 
    }

    public function removeSection(Request $request, $eventId, $sectionId){
        DB::table('event_sections')->where('id', '=', $sectionId)->delete();

        return redirect()->route('editEvent', [$eventId]);
    }
}
