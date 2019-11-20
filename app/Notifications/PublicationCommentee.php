<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\commentaire;

class PublicationCommentee extends Notification implements ShouldQueue
{
    use Queueable;

    private $commentaire;

    public function __construct(commentaire $commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
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
                    ->subject("Nouveau commentaire sur votre post: {$this->commentaire->titre}")
                    ->line("{$this->commentaire->commentaire}")
                    ->action('Voir le message', route('publiers.show', $this->commentaire->publier_id))
                    ->line('Merci d utiliser 3K Tecnologia');
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

    public function toDatabase($notifiable)
    {
        return [
            'commentaire' => $this->commentaire->commentaire->load('user'),
        ];
    }
}
