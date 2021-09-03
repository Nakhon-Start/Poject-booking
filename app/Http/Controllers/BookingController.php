<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class BookingController extends Controller
{
    public function index()
    {
        $respone = Http::get('http://127.0.0.1:8000/api/getlistroom');

        return view('pages.booking', ['room' => $respone]);
    }

    public function booking(Request $request){

        $response = Http::withToken(session('token'))->post('http://127.0.0.1:8000/api/booking', [
            'room_id' => $request['room_id'],
            'booker_note' => $request['booker_note'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date']
        ]);
        if($response->status() != 200){
            return redirect()->route('booking')->with('error','Failed to reserve');
        }
        return redirect()->route('booking')->with('message', 'Successful booking');
    }
}
