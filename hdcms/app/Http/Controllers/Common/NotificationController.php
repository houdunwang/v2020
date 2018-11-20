<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;
        return view('common.notification_index', compact('notifications'));
    }

    public function show(DatabaseNotification $notification)
    {
        $notification->markAsRead();
        return redirect($notification['data']['link']);
    }
}
