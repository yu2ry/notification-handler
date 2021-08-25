<?php

namespace Notification\Handler\Contracts;

use Notification\Handler\Abstracts\Event;

/**
 * Class Handler
 * @package Notification\Handler\Contracts
 */
interface Handler
{

    /**
     * @param Event $event
     * @return void
     */
    public function handle(Event $event): void;
}
