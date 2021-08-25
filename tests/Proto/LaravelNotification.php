<?php

namespace Notification\Handler\Tests\Proto;

use Illuminate\Notifications\Messages\MailMessage;
use Notification\Handler\Abstracts\Notification;

/**
 * Class LaravelNotification
 * @package Proto
 */
class LaravelNotification extends Notification
{

    /**
     * @param $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)->line($this->dto->message->text);
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable): array
    {
        return [
            'dto' => $this->dto
        ];
    }
}
