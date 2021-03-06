<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForcePunchoutMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $subject;
    public function __construct($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('site@hashroot.com','Autowelkin One')
        ->subject($this->subject)
        ->cc('lijimol.vr@hashroot.com')
        ->html('<br/>You have been punched out of your Autowelkin One automatically, since you were idle for 12 hours! <br />');
    }
}
