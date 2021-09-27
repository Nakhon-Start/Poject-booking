<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\BuildingController;

class UserController extends Controller
{

    public function index()
    {
        $building = new BuildingController();
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/listusers');
        return view('users.index', ['users' => $respone->object(), 'building' => $building->getBuilding()]);
    }

    public function getAllUser()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/listusers');
        return $respone->object();
    }
    public function onlineUser()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/onlineUser');
        return $respone->object();
    }

    public function getUser()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/user');
        return $respone->object();
    }

    public function SetUser(Request $request)
    {

        if (!Gate::allows('is_admin')) {
            return redirect()->route('home')->with('failed', 'Unauthenticated');
        }

        $response = Http::withToken(session('token'))->put(config('app.api_host') . '/api/setuser', [
            'id' => $request['id'],
            'is_admin' => $request['is_admin'],
            'is_active' => $request['is_active'],
        ]);
        if ($response->status() != 200) {
            return redirect()->route('user')->with('failed', trans('editUser.setUser.failed'));
        }

        return redirect()->route('user')->with('success', trans('editUser.setUser.success'));
    }

    public function getResponsibilities()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/getcheckerId');
        return $respone->object();
    }

    public function getchecker()
    {
        $data = $this->getResponsibilities();
        foreach ($data as $room) {
            return  $room->user_id;
        }
    }

    public function getlistChecker()
    {
        $respones = Http::get(config('app.api_host') . '/api/getchecker');

        return View('pages.responsibilities')->with('checker', $respones->object());
    }

    public function getBuildingFormID()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/getbuildingformcheckerid');
        return View('pages.check')->with('respone', $respone->object());
    }

    public function createResponsibilities(Request $request)
    {
        if (!Gate::allows('is_admin')) {
            return redirect()->route('home')->with('failed', 'Unauthenticated');
        }

        $response = Http::withToken(session('token'))->post(config('app.api_host') . '/api/createresponsibilities', [
            'user_id' => $request['user_id'],
            'building_id' => $request['building_id'],
        ]);

        if ($response->status() != 200) {
            return redirect()->route('responsibilities')->with('failed', trans('responsibilities.createResponsibilities.failed'));
        }

        return redirect()->route('responsibilities')->with('success', trans('responsibilities.createResponsibilities.success'));
    }
}
