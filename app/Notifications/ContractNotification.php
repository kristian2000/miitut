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
    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->desc = $data['desc'];
        $this->contract = $data['contract'];
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
        return (new MailMessage)
            ->from('miitut@gmail.com', '')
            ->subject('Notificacion de Contrato')
            ->greeting('Revisar contrato')
            // ->salutation('Tienes un Mensaje')
            ->line($this->desc)
            ->action('Abrir', url('/cuenta-contratos'))
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
        $statusName = Status::find($this->contract->status_id)->label;
        // $this->data->contract->categoryUser;
        // $desc = '';

        // switch($statusName){
        //     case 'Pendiente': {
        //         $desc = 'Te enviaron un contrato, revisalo';
        //     }; break;

        //     case 'Rechazado': {
        //         $desc = "El contrato fue rechazado, revisalo";
        //     }; break;

        //     case 'Pendiente de Pago': {
        //         $desc = "Contrato Aceptado, Pendiente de pago";
        //     }; break;

        //     case "Finalizado": {
        //         $desc = "Contrato Finalizado, revisalo y da tu comentario";
        //     }; break;

        //     case "En Mediacion": {
        //         $desc = "Contrato en Mediacion, espera que soporte revise tu caso";
        //     }; break;

        //     case "En Proceso": {
        //         $desc = "Contrato Pagado, en proceso para que las dos partes inicien";
        //     }; break;

        //     default: {
        //         $desc = 'revisa tus contratos';
        //     }
        // }

        return [
            'redirect' => 'cuenta-contratos',
            'contract' => $this->contract->id,
            'title' => $this->title,
            'description' => $this->desc,
            'status' => $statusName,
            'time' => Carbon::now()->diffForHumans()
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'contract' => $this->contract->id,
            "action" => "cuenta-contratos",
            'user' => Auth::user()
        ]);
    }
}
