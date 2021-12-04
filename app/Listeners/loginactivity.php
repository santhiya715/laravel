<?php

namespace App\Listeners;

use App\Events\loginactivity;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginActivity
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
     * @param  loginactivity  $event
     * @return void
     */
    public function handle(loginactivity $event)
    {
        //
    }
}
