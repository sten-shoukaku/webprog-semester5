<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventSection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DetailPemesananController extends Controller
{
    //
    public function index(Request $request) {
        $event = Event::find($request->event_id);
        $section = EventSection::find($request->section_id);
        $quantity = $request->quantity;
        $total_price = $section->price * $quantity;

        $rules = [
            'quantity' => 'required|integer|min:1|max:'.$section->stock,
        ];

        $messages = [
            'quantity.min' => 'Jumlah ticket minimum harus 1.',
            'quantity.max' => "OnTick tidak memiliki ticket yang cukup.",
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            return view('detailpemesanan', compact('event', 'section', 'quantity', 'total_price'));
        }

    }

    public function order(Request $request){
        $request->validate([
            'nama_lengkap' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'nomor_ponsel' => ['required'],
            'nomor_ktp' => ['required']
        ]);

        $user_id = Auth::user()->id;

        $stock = EventSection::find($request->sectionId)->stock;

        DB::table('event_sections')
            ->where(
                'id',
                '=',
                $request->sectionId
            )
            ->update(
                [
                    'stock' => (int)$stock - (int)$request->quantity
                ]
            );

        DB::table('transactions')->insert([
            'eventId' => $request->eventId,
            'sectionId' => $request->sectionId,
            'userId' => $user_id,
            'quantity' => $request->quantity,
            'total_price' => $request->totalPrice,
            'created_at' => Carbon::now()
        ]);

        return redirect('/vieworder');
    }
}
