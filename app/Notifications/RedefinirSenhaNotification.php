<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RedefinirSenhaNotification extends Notification
{
    use Queueable;
    public $token;
    public $email;
    public $nome;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token, $email, $nome)
    {
        $this->token = $token;
        $this->email = $email;
        $this->nome = $nome;
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
        $url = 'http://localhost:8000/password/reset/'.$this->token.'?email='.$this->email;
        $minutos = config('auth.passwords.'.config('auth.defaults.passwords').'.expire');
        return (new MailMessage)
            ->subject('Atualização de Senha')
            ->greeting('Olá '.$this->nome)
            ->line('Esqueceu a senha? Sem probelmas, vamos resolver isso!')
            ->action('Modificar Senha', $url)
            ->line('O link acima expira em '.$minutos.' minuots')
            ->line('Se você não deseja trocar a senha, favor desconsiderar esse email')
            ->salutation('Até Breve!');
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
