<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Request;

class BuildingController extends Controller
{

    public function index()
    {
        $respone = Http::get('http://127.0.0.1:8000/api/getlistbuilding');

        return view('pages.building', ['building' => $respone]);
    }

    public function createBuilding(Request $request)
    {
        $response = Http::withToken(session('token'))->post('http://127.0.0.1:8000/api/createtbuilding', [
            'name' => $request['name'],
            'description' => $request['description'],
        ]);

        if ($response->status() != 200) {
            return 'Unauthenticated';
        }
        return redirect()->route('building')->with('success', 'Create building success');
    }
}
