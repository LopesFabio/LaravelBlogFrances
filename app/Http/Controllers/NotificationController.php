<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function notifications(Request $request)
    {
        $notifications = $request->user()->unreadNotifications;

        return response()->json(compact('notifications'));
    }

    public function lire(Request $request)
    {
        $notifications = $request->user()->notifications()->where('id', $request->id)->first();

        if($notifications)
            $notifications->markAsRead();
    }

    public function MarquerLire(Request $request)
    {
            $request->user()->unreadNotifications->lire();
    }
}
