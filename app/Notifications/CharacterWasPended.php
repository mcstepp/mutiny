<?php

namespace App\Notifications;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CharacterWasPended extends Notification
{
    use Queueable, Cachable;

    protected $character;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($character)
    {
        $this->character = $character;
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
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'message' => "Your application for " . $this->character->username . " was pended for modifications.",
            'link' => route('view-my-pending-characters'),
            'icon' => 'fa-user-times text-danger'
        ];
    }
}
