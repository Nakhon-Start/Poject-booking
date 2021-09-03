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
        $response = Http::post('http://127.0.0.1:8000/api/register', [
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'password_confirm' => $request['password_confirmation']
        ]);

        if ($response->status() != 200) {
            return redirect('resgister')->with('message', 'incorrect information ');
        }

        $login = new LoginController();
        return $login->login($request);
    
    }
}
