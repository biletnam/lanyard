<?php

namespace App\Listeners\User;

use App\Events\User\EmailVerificationTokenReset;
use App\Mail\VerificationEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendVerificationEmail implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  EmailVerificationTokenReset $event
     * @return void
     */
    public function handle(EmailVerificationTokenReset $event)
    {
        $email = new VerificationEmail($event->user);

        Mail::to($event->user->email)->send($email);
    }
}
