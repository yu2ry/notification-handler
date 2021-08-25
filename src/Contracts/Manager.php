<?php

namespace Notification\Handler\Contracts;

use Notification\Handler\Abstracts\Event;

/**
 * Interface Dispatch
 * @package Notification\Handler\Contracts
 */
interface Manager
{

    /**
     * @param Event $event
     * @return void
     */
    public static function dispatch(Event $event): void;
}
