<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\RoomController;


class BookingController extends Controller
{

    public function bookingByRoom()
    {
        $response  = Http::get(config('app.api_host') . '/api/getlistroom');
        return view('pages.bookingByRoom', ['room' => $response->object()]);
    }

    public function booking(Request $request)
    {

        $response = Http::withToken(session('token'))->post(config('app.api_host') . '/api/booking', [
            'room_id' => $request['room_id'],
            'booker_note' => $request['booker_note'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date']
        ]);

        if ($response->status() != 200) {
            return redirect()->route('history')->with('failed', trans('booking.booking.failed'));
        }

        return redirect()->route('history')->with('success', trans('booking.booking.success'));
    }

    public function setBooking(Request $request)
    {
        $response = Http::withToken(session('token'))->put(config('app.api_host') . '/api/setbooking', [
            'id' => $request['id'],
            'booker_note' => $request['booker_note'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date']
        ]);

        if ($response->status() != 200) {
            return redirect()->route('history')->with('failed', trans('booking.set.failed'));
        }

        return redirect()->route('history')->with('success', trans('booking.set.success'));
    }

    public function showListBooking()
    {
        $booking = $this->getListBooking();
        return view('pages.listBooking', ['booking' => $booking]);
    }

    public function calendar()
    {
        return view('pages.calerdar');
    }

    public function calenarEvents()
    {
        $events = [];
        $list = $this->getListBooking();
        foreach($list as $data){
            if($data->booking_status == 1)
            $events[] = [
                'title' => $data->room->name,
                'start' =>  $data->start_date,
                'end' => date('Y-m-d H:i:s', strtotime($data->end_date . ' +1 day')),
            ];
        }
        return $events;
    }

    public function getListBooking()
    {
        $respone = Http::get(config('app.api_host') . '/api/getlistbooking');

        return  $respone->object();
    }

    public function history()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/history');
        return view('pages.history', ['data' => $respone->json(), 'booker' => $respone->json('checking_history')]);
    }

    public function appoveHistory()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/history');
        // return $respone->json();

        return view('pages.appoveHistory', ['data' => $respone->json('checking_history')]);
    }


    public function cancle(Request $request)
    {
        $response = Http::withToken(session('token'))->put(config('app.api_host') . '/api/cancle', [
            'id' => $request['id'],
            'booker_note' => $request['booker_note'],
        ]);

        if ($response->status() != 200) {
            return redirect()->route('history')->with('failed', trans('booking.dismiss.failed'));
        }
        return redirect()->route('history')->with('success', trans('booking.dismiss.success'));
    }


    public function approve(Request $request)
    {
        if (!Gate::allows('is_checker')) {
            return redirect()->route('listBooking')->with('failed', 'Unauthenticated');
        }

        $respone = Http::withToken(session('token'))->post(config('app.api_host') . '/api/approve', [
            'booking_id' => $request['id'],
            'accepted_note' => $request['accepted_note'],
            'rejected_note' => $request['rejected_note'],
        ]);
        if ($respone->status() != 200) {
            return redirect()->route('listBooking')->with('failed', trans('booking.approve.failed'));
        }
        return redirect()->route('listBooking')->with('success', trans('booking.approve.success'));
    }
}
