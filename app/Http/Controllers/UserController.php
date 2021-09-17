<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    public function index()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/listusers');
        return view('users.index', ['users' => $respone->json()]);
    }

    public function getUser()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/user');
        return $respone->object();
    }

    public function getResponsibilities()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/getcheckerId');
        return $respone->object();
    }

    public function getchecker()
    {
        $data = $this->getResponsibilities();
        foreach($data as $user){
            return $user->user_id;
        }
    }

    public function getlistChecker()
    {
        $respones = Http::get(config('app.api_host') . '/api/getchecker');

        return View('pages.responsibilities')->with('checker', $respones->json());
    }

    public function getBuildingFormID()
    {
        $respone = Http::withToken(session('token'))->get(config('app.api_host') . '/api/getbuildingformcheckerid');
        return View('pages.check')->with('respone', $respone->object());
    }
}
