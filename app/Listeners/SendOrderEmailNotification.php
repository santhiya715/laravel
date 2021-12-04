<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderEmailNotification
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
     * @param  object  $event
     * @return void
     */
    public function handle(OrderPlaced $event)
    {
        $user = User::find($event->user_id)->toArray();

        Mail::send('emails.event_order_placed', ['user' => $user], function($message) use ($user) {
            $message->to($user['email']);
            $message->subject('Thanks for your order');
            $message->from('no-reply@shouts.dev', 'Shouts.dev');
        });
    }
}