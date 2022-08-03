<?php

namespace App\Listeners;

use App\Events\BraodCast;
use App\Models\Chat;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BroasdCastLisner
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
     * @param object $event
     * @return void
     */
    public function handle(BraodCast $braodCast)
    {
        $chat = new Chat();
        $chat->message = $braodCast->msg;
        $chat->to_id = $braodCast->to;
        $chat->from_id = $braodCast->from->id;
        $chat->save();


    }
}
