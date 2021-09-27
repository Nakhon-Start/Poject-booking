<?php

namespace App\Http\Controllers;

use Exception;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\BuildingController;
use Illuminate\Http\Request;


class RoomController extends Controller
{

    public function index()
    {
        if (!Gate::allows('is_checker')) {
            throw new Exception("Unauthenticated.");
        }

        $building = new BuildingController();
        return view('pages.room', ['room' => $this->getListRoom(), 'building' => $building->getBuilding()]);
    }

    public function listRoom()
    {
        return view('pages.listRooms', ['room' => $this->getListRoom()]);
    }

    public function getListRoom()
    {
        $response  = Http::get(config('app.api_host') . '/api/getlistroom');
        return $response->object();
    }

    public function createRoom(Request $request)
    {
        $response = Http::withToken(session('token'))->post(config('app.api_host') . '/api/createroom', [
            'name' => $request['name'],
            'description' => $request['description'],
            'quantity' => $request['quantity'],
            'room_type' => $request['room_type'],
            'building_id' => $request['building_id'],

        ]);

        if ($response->status() != 200) {
            return redirect()->route('room')->with('failed', trans('room.createRoom.failed'));
        }

        return redirect()->route('room')->with('success', trans('room.createRoom.success'));
    }

    public function setRoompage($id)
    {
        return View('pages.setRoom', compact('id'));
    }

    public function getRoom($id)
    {
        $response = Http::get(config('app.api_host') . '/api/getroom/' . $id);

        return $response->json('user');
    }

    public function bookingByTime()
    {
        $buuilding = new BuildingController();
        return view('pages.bookingByTime', ['building' => $buuilding->getBuilding()]);
    }

    public function SearchForAvailableRoom(Request $request)
    {
        $events = [];
        $response = Http::post(config('app.api_host') . '/api/SearchForAvailableRoom', [
            'room_id' => $request['room_id'],
        ]);

        $room = $response->object();
        foreach ($room as $data) {
            $events[] = [
                'title' => $data->booker_note,
                'start' =>  $data->start_date,
                'end' => date('Y-m-d H:i:s', strtotime($data->end_date . ' +1 day')),
            ];
        }
        return response()->json($events);
    }

    public function setRoom(Request $request)
    {
        $response = Http::withToken(session('token'))->put(config('app.api_host') . '/api/setroom', [
            'id' => $request['id'],
            'name' => $request['name'],
            'description' => $request['description'],
            'is_active' => $request['is_active'],
            'quantity' => $request['quantity'],
            'room_type' => $request['room_type'],
        ]);

        if ($response->status() != 200) {
            return redirect()->route('room')->with('failed', trans('room.setRoom.failed'));
        }

        return redirect()->route('room')->with('success', trans('room.setRoom.success'));
    }
}
