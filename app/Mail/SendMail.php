<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Http\controllers\MailController;

class SendMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    // public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(public array $data)
    {
        // $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            //from: new Address($this->fromAddress, $this->fromName),
            from: new Address('sara@gmail.com', 'UNW'),
            subject: 'Send Mail'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.mailToClient',
            with: [
                'data' => $this->data
            ],
        );



        // return new Content(
        //     markdown: 'emails.single-mail',
        // );
        // return $this->markdown('emails.single-mail')->with([
        //     'data' => $this->data
        // ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
