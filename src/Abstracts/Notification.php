<?php

namespace Notification\Handler\Abstracts;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification as LaravelNotification;
use Notification\Handler\DTOs\NotificationDTO;

/**
 * Class AbstractNotification
 * @package Notification\Handler\Abstracts
 */
abstract class Notification extends LaravelNotification implements ShouldQueue
{

    use Queueable;

    /**
     * @var NotificationDTO
     */
    protected $dto;

    /**
     * @return NotificationDTO
     */
    public function getDTO(): NotificationDTO
    {
        return $this->dto;
    }

    /**
     * AbstractNotification constructor.
     * @param NotificationDTO|null $dto
     */
    public function __construct(NotificationDTO $dto = null)
    {
        $this->dto = $dto;
    }

    /**
     * @param $notifiable
     * @return array
     */
    abstract public function via($notifiable): array;

    /**
     * @param $notifiable
     * @return MailMessage
     */
    abstract public function toMail($notifiable): MailMessage;

    /**
     * @param $notifiable
     * @return array
     */
    abstract public function toArray($notifiable): array;
}
