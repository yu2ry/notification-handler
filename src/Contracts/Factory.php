<?php

namespace Notification\Handler\Contracts;

use Notification\Handler\Abstracts\Event;

/**
 * Class Factory
 * @package Notification\Handler\Contracts
 */
interface Factory
{

    /**
     * @param Event $event
     * @param array $params
     * @return Handler
     */
    public function make(Event $event, array $params = []): Handler;
}
