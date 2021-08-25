<?php

namespace Notification\Handler;

use Notification\Handler\Abstracts\Event;
use Notification\Handler\Contracts\Manager;

/**
 * Class NotificationDispatch
 * @package Notification\Handler
 */
class EventManager implements Manager
{

    /**
     * @param Event $event
     * @return void
     */
    public static function dispatch(Event $event): void
    {
        event($event);
    }
}
