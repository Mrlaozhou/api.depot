<?php

namespace App\Listeners\SOS;

use App\Events\SOS;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CallManager
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
     * @param  SOS  $event
     * @return void
     */
    public function handle(SOS $event)
    {
        // 呼叫网管
    }
}
