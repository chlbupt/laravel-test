<?php

namespace App\Listeners;

use App\Events\LogoutEvent;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class LogoutListener
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
     * @param  LoginEvent  $event
     * @return void
     */
    public function handle(LogoutEvent $event)
    {
        $user = $event->getUser();
        $ip = $event->getIp();
        $type = $event->getType();
        $timestamp = $event->getTimestamp();

        $login_info = [
            'user_id' => $user->id,
            'ip' => $ip,
            'type' => $type,
            'updated_at' => Carbon::createFromTimestamp($timestamp)->toDateTimeString()
        ];
        DB::table('login_event')->insert($login_info);
    }
}
