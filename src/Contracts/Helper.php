<?php

namespace Notification\Handler\Contracts;

use Notification\Handler\DTOs\NotificationDTO;

/**
 * Interface NotificationHelper
 * @package Notification\Handler\Contracts
 */
interface Helper
{

    /**
     * @param NotificationDTO $dto
     * @param string $notification
     */
    public static function send(NotificationDTO $dto, string $notification): void;
}
