<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\BuildingController;


class HomeController extends Controller
{
    /**
     * 
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $buuilding = new BuildingController();
        return view('dashboard', ['room' => $buuilding->getBuilding(), 'building' => $buuilding->getBuilding()]);
    }

    public function searchBuild(Request $request)
    {
        $buuilding = new BuildingController();
        if ($request['building_id'] == "null") {
            return view('dashboard', ['room' => $buuilding->getBuilding(), 'building' => $buuilding->getBuilding()]);
        }

        $response  = Http::post(config('app.api_host') . '/api/getbuilding', [
            'building_id' => $request['building_id']
        ]);
        return view('dashboard', ['room' => $response->object(), 'building' => $buuilding->getBuilding()]);
    }

    public function search()
    {
        $building = new BuildingController();
        $room = new RoomController();
        $user = new UserController();
        $booking = new BookingController();

        return view(
            'pages.search',
            [
                'building' => $building->getBuilding(),
                'room' => $room->getListRoom(),
                'user' => $user->getAllUser(),
                'booking' => $booking->getListBooking(),
                'userOline' => $user->onlineUser()
            ]
        );
    }
}
