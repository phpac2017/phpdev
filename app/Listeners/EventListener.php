<?php

namespace App\Listeners;

use App\Events\Event;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Entrust;
use Redirect;

class EventListener
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
     * @param  Event  $event
     * @return void
     */
    public function handle(Event $event)
    {
        if (\Auth::viaRemember()) {
			if(auth()->user()->hasRole('admin')){
				return Redirect::route('admin/profile');
			}elseif(auth()->user()->hasRole('doctor')){
				return Redirect::route('doctor/profile');
			}else{
				return Redirect::route('patient/profile');
			}
		}
    }
}
