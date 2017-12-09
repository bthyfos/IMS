<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\carbon;
class lastLogIn
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }


    public function handle(Login $event)
    {
      $event->user->lastLogIn         =   $event->user->current_signInAt ? $event->user->current_signInAt : Carbon::now();
      $event->user->current_signInAt  = Carbon::now();
      $event->user->save();
    }
}
