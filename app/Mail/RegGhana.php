<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegGhana extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome to PorkMoney')
                    ->view('mail.reg-ghana');
                    // ->attach(public_path().'/pdf/partnership-form.pdf', [
                    //     'as' => 'porkmoney-partnership-form.pdf',
                    //     'mime' => 'application/pdf',
                    // ])
                    /* ->attach(public_path().'/pdf/partnership-ghana.pdf', [
                        'as' => 'porkmoney-partnership-contract.pdf',
                        'mime' => 'application/pdf',
                    ]); */
    }
}
