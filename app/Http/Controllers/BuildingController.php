<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Request;

class BuildingController extends Controller
{
    public function index()
    {
        if (!Gate::allows('is_admin')) {
            return redirect()->route('home')->with('failed', 'Unauthenticated');
        }

        
        // $building = Post::latest()->paginate(5);   

        return view('pages.building', ['building' => $this->getBuilding()]);
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function listBuilding()
    {

        return view('pages.listBuildings', ['building' => $this->getBuilding()]);
    }

    public function getBuilding()
    {
        $respone = Http::get(config('app.api_host') . '/api/getlistbuilding');
        return $respone->object();
    }

    public function createBuilding(Request $request)
    {
        if (!Gate::allows('is_admin')) {
            return redirect()->route('listBooking')->with('failed', 'Unauthenticated');
        }

        $respone = Http::withToken(session('token'))->post(config('app.api_host') . '/api/createtbuilding', [
            'id' => $request['id'],
            'name' => $request['name'],
            'description' => $request['description'],
            'is_active' => $request['is_active'],
        ]);

        if ($respone->status() != 200) {
            return redirect()->route('building')->with('failed', trans('building.create.failed'));
        }
        return redirect()->route('building')->with('success', trans('building.create.success'));
    }


    public function setBuildingPage($id)
    {
        if (!Gate::allows('is_admin')) {
            return redirect()->route('listBooking')->with('failed', 'Unauthenticated');
        }
        return View('pages.setBuilding', compact('id'));
    }


    public function setBuilding(Request $request)
    {
        if (!Gate::allows('is_admin')) {
            return redirect()->route('calerdar')->with('failed', 'Unauthenticated');
        }

        $respone = Http::withToken(session('token'))->put(config('app.api_host') . '/api/setbuilding', [
            'id' => $request['id'],
            'name' => $request['name'],
            'description' => $request['description'],
            'is_active' => $request['is_active'],
        ]);


        if ($respone->status() != 200) {
            return redirect()->route('building')->with('failed', trans('building.setBuilding.failed'));
        }
        return redirect()->route('building')->with('success', trans('building.setBuilding.success'));
    }
}
