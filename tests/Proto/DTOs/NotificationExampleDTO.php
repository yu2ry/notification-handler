<?php

namespace Notification\Handler\Tests\Proto\DTOs;

use Notification\Handler\DTOs\MessageDTO;
use Notification\Handler\DTOs\NotificationDTO;
use Notification\Handler\DTOs\UserDTO;

/**
 * Class NotificationExampleDTO
 * @package Proto\DTOs
 */
class NotificationExampleDTO extends NotificationDTO
{

    /**
     * NotificationExampleDTO constructor.
     * @param UserExampleDTO $recipient
     * @param MessageDTO|null $message
     */
    public function __construct(UserDTO $recipient, MessageDTO $message = null)
    {
        parent::__construct($recipient, $message);
    }
}
