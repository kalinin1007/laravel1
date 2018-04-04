<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text)
    {
        //
        $this->data = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->view('mail.feedback')
                    ->from(['address' => 'nk789@yandex.ru'])//важно корректный адрес MAIL_USERNAME=nk789@yandex.ru!!!!!!
                    ->with(['data' => $this->data])
                    ->subject('Письмо с блога');
    }
}
