<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Promotion extends Mailable
{
    use Queueable, SerializesModels;

     /**
      * The path of the mail to send.
      *
      */
     protected $viewPath;

    /**
     * Create a new message instance.
     *
     */
    public function __construct($id)
    {
        $this->viewPath = 'mailable.promotion.'.$id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (view()->exists($this->viewPath)) {
            return $this->subject('🏥 Utilisez la réalité augmentée pour le projet d\'hôpital Bienne/Brügg')->view($this->viewPath);
        }
        abort(404);
    }
}
