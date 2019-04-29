<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewApplication extends Notification
{
    use Queueable;

    public $applicant;
    public $password;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( $applicant, $password)
    {
         $this->applicant = $applicant;
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
                    ->greeting('Hello,' . $this->applicant->name . '!!!')
                    ->line('Welcome to European University of Bangladesh.')
                    ->line('You are successfully created ')
                    ->line('Your login email : '.$this->applicant->email )
                    ->line(' Your login password : '.$this->password )
                    ->line('Please change the password as soon as possible')
                    ->line('To login click bellow button')
                    ->action('Login', route('admission.login'))
                    ->line('Thank you to stay with us!');
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
