<?php

namespace App\Notifications;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ThreadWasReplied extends Notification
{
    use Queueable, Cachable;

    protected $thread;

    protected $post;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($thread, $post)
    {
        $this->thread = $thread;
        $this->post = $post;
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
            'message' => $this->post->author->username . " replied to " . $this->thread->title,
            'link' => $this->thread->path(),
            'icon' => 'fa-comments text-info'
        ];
    }
}
