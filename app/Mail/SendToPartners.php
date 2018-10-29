<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendToPartners extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $data;
   
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $data)
    {
         $this->user = $user;
         $this->data = $data;
         //dd($user);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->data['title'])->view('mail.topartners');//->with(['user', $this->user]);


        //->with([
                //'username' =>$this->user->name,
            //]);
                    
    }
}
