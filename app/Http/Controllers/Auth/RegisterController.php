<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
        $response = Http::post(config('app.api_host').'/api/register', [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'password_confirm' => $request['password_confirmation']
        ]);

        if ($response->status() != 200) {
            return redirect('register')->with('message', trans('auth.register_failed'));
        }

        $login = new LoginController();
        return $login->login($request);
    
    }
}
