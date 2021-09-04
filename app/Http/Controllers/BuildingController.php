<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Request;

class BuildingController extends Controller
{

    public function index()
    {

        return view('pages.building', ['building' => $this->getBuilding()]);
    }

    public function listBuilding()
    {
        return view('pages.listBuildings', ['building' => $this->getBuilding()]);
    }

    public function getBuilding()
    {
        $respone = Http::get(config('app.api_host').'/api/getlistbuilding');
        return $respone;
    }

    public function createBuilding(Request $request)
    {
        $respone = Http::withToken(session('token'))->post(config('app.api_host').'/api/createtbuilding', [
            'name' => $request['name'],
            'description' => $request['description'],
        ]);

        if ($respone->status() != 200) {
            return 'Unauthenticated';
        }
        return redirect()->route('building')->with('success', 'Create building success');
    }
}
