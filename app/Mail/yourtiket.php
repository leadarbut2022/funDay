<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class yourtiket extends Mailable
{
    use Queueable, SerializesModels;
  public $tik_id_qr;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tik_id_qr)
    {
        $this->tik_id_qr = $tik_id_qr;
    }


    public function build()
    {
        return $this->view('link');
    }
    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Yourtiket',
        );
    }



    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'link',
            
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
