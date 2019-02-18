<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewUser extends Notification implements ShouldQueue
{
    use Queueable;
    public $user;
    public $password;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( $user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Welcome to EUB')
                    ->greeting('Hello,' . $this->user->name . '!!!')
                    ->line('Welcome to European University of Bangladesh.')
                    ->line('You are the member of admission commitee')
                    ->line('Your Login Email : '.$this->user->email )
                    ->line(' Your Login password : '.$this->password )
                    ->line('Please change the password as soon as possible')
                    ->line('To login click bellow button')
                    ->action('Login', route('login'))
                    ->line('Thank you!');
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
}
