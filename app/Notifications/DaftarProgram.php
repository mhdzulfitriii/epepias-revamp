<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class DaftarProgram extends Notification
{
    use Queueable;

    public $program;
    /**
     * Create a new notification instance.
     */
    public function __construct($program)
    {
        $this->program = $program;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $programDetails = "Program : {$this->program->NamaProgram} <br> 
                        Tempat : {$this->program->Tempat} <br> 
                        Tarikh : " . \Carbon\Carbon::parse($this->program->StartDate)->translatedFormat('j F Y');

        if ($this->program->EndDate != null && $this->program->EndDate != $this->program->StartDate) {
            $programDetails .= " hingga " . \Carbon\Carbon::parse($this->program->EndDate)->translatedFormat('j F Y');
        }

        return (new MailMessage)
            ->subject('[E-PEPIAS] Pengesahan Pendaftaran MyProgram')
            ->greeting('Salam')
            ->line('Pendaftaran MyProgram anda telah disahkan! Anda akan menerima notifikasi jika MyHadir bagi program ini telah dibuka')
            ->line(new HtmlString($programDetails . "<br>"))
            ->line(new HtmlString("<b> Generasi Penerus Harapan Ummah ! <i><b><br><br>"))
            ->salutation(new HtmlString("Yang Benar,<br>E-PEPIAS"));
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
