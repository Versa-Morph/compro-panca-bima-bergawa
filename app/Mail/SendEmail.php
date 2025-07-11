<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = isset($this->data['name']) && !empty($this->data['name'])
        ? ' - ' . $this->data['name']
        : '';

    return $this->subject('Quote Request' . $name)
                ->view('emails.quote')
                ->with('data', $this->data);
    }
}
