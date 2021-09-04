<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Request;

class RoomController extends Controller
{

    public function index()
    {

        return view('pages.room', ['room' => $this->getListRoom()]);
    }
    public function listRoom()
    {
        return view('pages.listRooms', ['room' => $this->getListRoom()]);
    }
    public function getListRoom()
    {
        $respone = Http::get(config('app.api_host').'/api/getlistroom');
        return $respone;
    }

    public function createRoom(Request $request)
    {
        $response = Http::withToken(session('token'))->post(config('app.api_host').'/api/createroom', [
            'name' => $request['name'],
            'description' => $request['description'],
            'building_id' => $request['building_id'],
        ]);

        if ($response->status() != 200) {
            return redirect()->route('room')->with('error', 'Create room fail');
        }

        return redirect()->route('room')->with('success', 'Create room success');
    }
}
