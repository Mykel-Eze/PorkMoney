<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Newsletter extends Notification
{
    use Queueable;

    protected $newsletter;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

               /* $url = url('/dashboard');
                return (new MailMessage)
                ->subject($this->newsletter->get('title'))
                ->greeting('Dear! '.$notifiable->name)
                //->line($this->newsletter->get('message'))
                //->action('View message on dashboard message', $url)
                ->salutation($this->newsletter->get('message'));*/
        
        $url = url('/dashboard');
        return (new MailMessage)
                ->subject("Hey! Check out what we have for you.")
                ->greeting('Hello! '.$notifiable->name)
                ->line('We left you a message on your dashboard.')
                ->action('View new message', $url)
                ->line('Do take a minute to go read it. Less than a minute even.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public function toDatabase($notifiable)
    {
        return [
            'type'      => 'newsletter',
            'title'     => $this->newsletter->get('title'),
            'image'     => $this->newsletter->get('image'),
            'message'   => $this->newsletter->get('message'),
        ];
    }
}
