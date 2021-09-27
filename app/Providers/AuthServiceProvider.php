<?php

namespace App\Providers;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is_admin' , function (){
            $user = new UserController();
            $getUser = $user->getUser();
            return $getUser->is_admin;
        });

        Gate::define('is_checker' , function (){
            $user = new UserController();
            $getUser = $user->getUser();
            $checker = $user->getchecker();
            return $getUser->id === $checker;
        });

        Gate::define('booking_status' , function (){
            $status = new BookingController();
            $getBooking = $user->getUser();
            $checker = $user->getchecker();
            return $getUser->id === $checker;
        });
    }
}