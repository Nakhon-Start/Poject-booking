<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class BookingController extends Controller
{
    public function index()
    {
        $respone = Http::get(config('app.api_host').'/api/getlistroom');

        return view('pages.booking', ['room' => $respone]);
    }

    public function booking(Request $request){

        $response = Http::withToken(session('token'))->post(config('app.api_host').'/api/booking', [
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

    public function getListBooking()
    {
        $respone = Http::get(config('app.api_host').'/api/getlistbooking');

        return view('pages.listBooking', ['booking' => $respone->json()]);
    }
}
