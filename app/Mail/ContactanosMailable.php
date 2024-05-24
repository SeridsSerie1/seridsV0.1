<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            //con el from definimos el correo electronico de la persona que envia el correo
            from: new Address('serids@contact.com', 'Eliecer Bedoya'),
            //Aqui se escribe el asunto del correo
            subject: 'Informacion de contacto',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        //Aqui ponemos contenido en el mail
        return new Content(
            /*aqui definimos que la vista se encuentra dentro de una carpeta llamada email
            y la vista se va a llamar contactanos*/
            view: 'emails.contactanos',
        );
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
