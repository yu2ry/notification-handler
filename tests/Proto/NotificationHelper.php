<?php

namespace Notification\Handler\Tests\Proto;

use Illuminate\Support\Facades\Notification;
use Notification\Handler\Contracts\Helper;
use Notification\Handler\DTOs\NotificationDTO;

/**
 * Class NotificationHelper
 * @package Notification\Handler\Tests\Proto
 */
class NotificationHelper implements Helper
{

    /**
     * @param NotificationDTO $dto
     * @param string $notification
     */
    public static function send(NotificationDTO $dto, string $notification): void
    {
        Notification::send(
            UserProxy::find($dto->recipient->id),
            new $notification($dto)
        );
    }
}
