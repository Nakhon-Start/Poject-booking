<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Request;

class RoomController extends Controller
{

    public function index()
    {
        $respone = Http::get('http://127.0.0.1:8000/api/getlistroom');

        return view('pages.room', ['room' => $respone]);
    }

    public function createRoom(Request $request)
    {
        $response = Http::withToken(session('token'))->post('http://127.0.0.1:8000/api/createroom', [
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
