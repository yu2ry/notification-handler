<?php

namespace Notification\Handler\DTOs;

use Notification\Handler\Contracts\NotificationDTO as NotificationContract;

/**
 * Class NotificationDTO
 * @package Notification\handler\Objects
 */
abstract class NotificationDTO implements NotificationContract
{

    /**
     * @var UserDTO
     */
    public $recipient;

    /**
     * @var MessageDTO|null
     */
    public $message;

    /**
     * NotificationDTO constructor.
     * @param UserDTO $recipient
     * @param MessageDTO|null $message
     */
    public function __construct(UserDTO $recipient, MessageDTO $message = null)
    {
        if (!$this->validate()) {
            throw new \InvalidArgumentException();
        }
        $this->recipient = $recipient;
        $this->message = $message;
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        return true;
    }
}
