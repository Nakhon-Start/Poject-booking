<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\RoomController;


class BookingController extends Controller
{
    public function index()
    {
        $response  = Http::get(config('app.api_host') . '/api/getlistroom');
        return view('pages.booking', ['room' => $response->json()]);
    }

    public function bookingPage($id)
    {
        return view('pages.bookingPage', compact('id'));
    }

    public function bookingByData(Request $request)
    {
        $response = Http::withToken(session('token'))->post(config('app.api_host') . '/api/booking', [
            'room_id' => $request['room_id'],
            'booker_note' => $request['booker_note'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date']
        ]);

        if ($response->status() != 200) {
            return redirect()->route('listBooking')->with('failed', trans('booking.booking.failed'));
        }

        return redirect()->route('listBooking')->with('success', trans('booking.booking.success'));
    }


    public function bookingByRoomId(Request $request, $id)
    {

        $response = Http::withToken(session('token'))->post(config('app.api_host') . '/api/booking', [
            'room_id' => $id,
            'booker_note' => $request['booker_note'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date']
        ]);

        if ($response->status() != 200) {
            return redirect()->route('listBooking')->with('failed', trans('booking.booking.failed'));
        }

        return redirect()->route('listBooking')->with('success', trans('booking.booking.success'));
    }

    public function showListBooking()
    {
        $booking = $this->getListBooking();
        return view('pages.listBooking', ['booking' => $booking]);
    }

    public function getListBooking()
    {
        $respone = Http::get(config('app.api_host') . '/api/getlistbooking');

        return  $respone->json();
    }

    public function history()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/history');
        return view('pages.history', ['data' => $respone->json(), 'booker' => $respone->json('checking_history')]);
    }


    // public function cancle(Request $request)
    // {
    //     $response = Http::withToken(session('token'))->post(config('app.api_host').'/api/cancle', [
    //         'id' => $request['id'],
    //         'booker_note' => $request['booker_note'],
    //     ]);

    //     return $response->json('message');
    // }
}
