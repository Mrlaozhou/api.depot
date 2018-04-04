<?php

namespace App\Listeners\SOS;

use App\Events\SOS;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShutDown
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
        // 虚拟 “关机操作”

    }
}
