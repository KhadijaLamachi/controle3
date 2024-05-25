<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Listeners\checkOwner;
use App\Models\Car;
use App\Models\Owner;

class checkOwnerListener
{
    /**
     * Create the event listener.
     */
    public function __construct(checkOwner $event)
    {
        //
        $notification = 'notification';
        return view('show',['notification',$notification]);
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        //
    }
}
