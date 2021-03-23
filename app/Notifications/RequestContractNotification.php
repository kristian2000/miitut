<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Carbon\Carbon;

class RequestContractNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($contract, $action)
    {
        $this->contract = $contract;
        $this->action = $action;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $title = '';
        $description = '';

        switch($this->action){
            case 'send': {
                $title = "Tienes una Solicitud por tu anuncio";
                $description = "revisa tus anuncios tienes una solicitud";
            };break;
            case "accept": {
                $title = "Tu solicitud fue aceptada";
                $description = "revisa tus contratos";
            };break;
        }

        return [
            'contract' => $this->contract->id,
            'title' => $title,
            'description' => $description,
            'time' => Carbon::now()->diffForHumans()
        ];
    }
}
