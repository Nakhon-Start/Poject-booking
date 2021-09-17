<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        if (!Gate::allows('is_admin')) {
            return redirect()->route('home')->with('failed', 'Unauthenticated');
        }
        return view('profile.edit');
    }

}
