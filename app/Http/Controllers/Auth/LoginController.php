<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $response = Http::post(config('app.api_host').'/api/login', [
            'email' => $credentials['email'],
            'password' => $credentials['password'],
        ]);
        
        if ($response->status() != 200) {
            return redirect()->route('login')->with('message' , trans('auth.failed'));
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->put('token', $response->json('token'));
            return redirect()->intended('home');
        }
        return redirect('login');
    }

    public function logout()
    {
        $token = session()->get('token');
        Http::withToken($token)->get(config('app.api_host').'/api/logout');

        if (session()->has('token')) {
            session()->flush();
        }

        return redirect('/');
    }


}
