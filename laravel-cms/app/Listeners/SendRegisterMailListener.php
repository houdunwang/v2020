<?php

namespace App\Listeners;

use App\Notifications\RegisterMailNotify;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegisterMailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $event->user;
        $user->mail_token = str_random(10);
        $user->save();
        $user->notify(new RegisterMailNotify($user));
    }
}
