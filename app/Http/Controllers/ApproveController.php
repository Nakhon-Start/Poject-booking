<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;


class ApproveController extends BaseController
{
    public function approvePage($id)
    {
        if (!Gate::allows('is_checker')) {
            return redirect()->route('listBooking')->with('failed', 'Unauthenticated');
        }
        return View('pages.appove', compact('id'));
    }

    public function approve(Request $request, $id)
    {
        if (!Gate::allows('is_checker')) {
            return redirect()->route('listBooking')->with('failed', 'Unauthenticated');
        }

        $respone = Http::withToken(session('token'))->post(config('app.api_host') . '/api/approve', [
            'booking_id' => $id,
            'accepted_note' => $request['accepted_note'],
            'rejected_note' => $request['rejected_note'],
        ]);
        if ($respone->status() != 200) {
            return redirect()->route('listBooking')->with('failed', trans('booking.approve.failed'));
        }
        return redirect()->route('listBooking')->with('success', trans('booking.approve.success'));
    }
}
