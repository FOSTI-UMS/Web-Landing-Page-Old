<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\Blog;

class Subs extends Mailable
{
    use Queueable, SerializesModels;
    public $postdata;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Blog $postdata)
    {
        $this->postdata = $postdata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->postdata->title)->view('emails.subs');
    }
}
