<?php

namespace App\Notifications;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Mailgun\Mailgun;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MailController ;
use Illuminate\Support\Facades\Mail;

class MessageNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // 'greeting' => $this->greeting,
        return (new MailMessage)
                    ->from('miitut@gmail.com', '')
                    ->subject('Nuevo Mensaje')
                    ->greeting('Tienes un Mensaje')
                    // ->salutation('Tienes un Mensaje')
                    ->line($this->message->message)
                    ->action('Abrir', url('/cuenta-mensajes'))
                    ->line('Gracias por usar nuestra aplicacíon!');
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
            'redirect' => 'cuenta-mensajes',
            'title' => "Tienes un Mensaje",
            'description' => $this->message->message,
            "time" => Carbon::now()->diffForHumans()
        ];
    }
}
