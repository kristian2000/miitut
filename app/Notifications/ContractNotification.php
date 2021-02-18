<?php

namespace App\Notifications;

use App\Models\Contract;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Support\Facades\Auth;

class ContractNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Contract $contract)
    {
        $this->contract = $contract;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
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
        $statusName = Status::find($this->contract->status_id)->label;
        $this->contract->categoryUser;
        $desc = '';

        switch($statusName){
            case 'Pendiente': {
                $desc = 'Te enviaron un contrato, revisalo';
            }; break;

            case 'Rechazado': {
                $desc = "El contrato fue rechazado, revisalo";
            }; break;

            case 'Pendiente de Pago': {
                $desc = "Contrato Aceptado, pendiente de pago";
            }; break;

            case "Finalizado": {
                $desc = "Contrato Finalizado, revisalo y da tu comentario";
            }; break;

            case "En Proceso": {
                $desc = "Contrato Pagado, en proceso para que las dos partes inicien";
            }; break;

            default: {
                $desc = 'revisa tus contratos';
            }
        }

        return [
            'contract' => $this->contract->id,
            'title' => 'Notificacion de contrato',
            'description' => $desc,
            'status' => $statusName,
            'time' => Carbon::now()->diffForHumans()
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'contract' => $this->contract->id,
            'user' => Auth::user()
        ]);
    }
}
