<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserNotification extends Notification
{
    use Queueable;

    public array $data;

    /**
     * Create a new notification instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        /*
            Para outros channels como celular, configurar mecanismo
            como firebase ou twilio, por exemplo
        */
        return ['mail','database'];
    }

    /**
     * Send mail notification
     */
    public function toMail(object $notifiable)//: MailMessage
    {
        return (new MailMessage)
                    ->from('noreply@example.com.br', env('APP_NAME'))
                    ->subject($this->data['subject'])
                    ->line($this->data['message']);
    }

    /**
     * Save data in database
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'subject' => $this->data['subject'],
            'message' => $this->data['message'],
        ];
    }
}
