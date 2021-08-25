<?php

namespace Notification\Handler\Contracts;

use Notification\Handler\Abstracts\Event;

/**
 * Interface Listener
 * @package Notification\Handler\Contracts
 */
interface Listener
{

    /**
     * @param Event $event
     */
    public function handle(Event $event): void;
}
