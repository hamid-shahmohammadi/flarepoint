<?php

namespace App\Notifications;

use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class YouWereMentionedNotification extends Notification
{
    use Queueable;
    public $comment;

    /**
     * Create a new notification instance.
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable)
    {
        $topic = $this->comment->commentable;
        $text  = __(':creator mentioned you in :topic', [
            'topic'   => $topic->title,
            'creator' => $notifiable->name,
            ]);

        $url_prefix = 'App\Models\Task' == get_class($topic) ? 'tasks/' : 'leads/';

        return [
            'assigned_user' => $notifiable->id,
            'created_user'  => $this->comment->user_id,
            'message'       => $text,
            'type'          => get_class($topic),
            'type_id'       => $topic->id,
            'url'           => url($url_prefix.$topic->id),
            'action'        => 'mentioned',
        ];
    }
}
