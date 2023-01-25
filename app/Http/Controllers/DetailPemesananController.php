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
        $namaLengkap = $request->nama_lengkap;
        $email = $request->email;
        $nomorPonsel = $request->nomor_ponsel;
        $nomorKTP = $request->nomor_ktp;

        $rules = [
            'namaLengkap' => 'required|min:3|max:20',
            'email' => 'required|email:dns',
            'nomorPonsel' => 'required',
            'nomorKTP' => 'required',
        ];

        $messages = [
            'namaLengkap.required' => 'Data Nama Lengkap harus diisi.',
            'email.required' => 'Data email harus diisi.',
            'nomorPonsel.required' => 'Data Nomor Ponsel harus diisi.',
            'nomorKTP.required' => 'Data KTP harus diisi.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        } else {
            $userId = Auth::user()->id;

            $oldstock = DB::table('event_sections')->where('id', '=', $request->sectionId)->sum('stock');
            $newstock = $oldstock - $request->quantity;
            DB::table('event_sections')->where('id',$request->sectionId)->update(['stock' => $newstock]);

            DB::table('transactions')->insert([
                'eventId' => $request->eventId,
                'sectionId' => $request->sectionId,
                'userId' => $userId,
                'quantity' => $request->quantity,
                'total_price' => $request->totalPrice,
                'created_at' => Carbon::now(),
            ]);

            return redirect('/vieworder');
        }
    }
}
