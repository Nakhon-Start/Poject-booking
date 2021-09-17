<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Request;

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
        return $response;
    }

    public function createRoom(Request $request)
    {
        $response = Http::withToken(session('token'))->post(config('app.api_host') . '/api/createroom', [
            'name' => $request['name'],
            'description' => $request['description'],
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
        $response = Http::get(config('app.api_host') . '/api/getroom/'.$id);

        return $response->json('user');
    }

    public function SearchForRoomsByTime(Request $request)
    {
        $response = Http::post(config('app.api_host') . '/api/SearchForRoomsByTime', [
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
        ]);
        if($response->status() != 200){
            return redirect()->route('booking')->with('emptyRoom', trans('room.empty.time',['time_start' => $request['start_date'],'time_emd' => $request['end_date']]));
        }

        return redirect()->route('booking')->with('data', $response->object());
    }

    public function SearchForAvailableRoom(Request $request)
    {

        $response = Http::post(config('app.api_host') . '/api/SearchForAvailableRoom', [
            'room_id' => $request['room_id'],
        ]);
        if($response->status() != 200){
            return redirect()->route('booking')->with('emptyTime', trans('room.empty.room'));
        }

        return redirect()->route('booking')->with('data', $response->object());
    }

    public function setRoom(Request $request, $id)
    {
        $response = Http::withToken(session('token'))->put(config('app.api_host') . '/api/setroom', [
            'id' => $id,
            'name' => $request['name'],
            'description' => $request['description'],
            'is_active' => $request['is_active'],
        ]);

        if ($response->status() != 200) {
            return redirect()->route('room')->with('failed', trans('room.setRoom.failed'));
        }

        return redirect()->route('room')->with('success', trans('room.setRoom.success'));
    }
}
