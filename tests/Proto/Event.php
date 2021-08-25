<?php

namespace Notification\Handler\Tests\Proto;

use Notification\Handler\Abstracts\Event as AbstractEvent;

/**
 * Class ExampleEvent
 * @package Notification\Handler\Tests\Proto
 */
class Event extends AbstractEvent
{

    /**
     * @var UserProxy
     */
    public $user;

    /**
     * @var string
     */
    public $text;

    /**
     * Event constructor.
     * @param UserProxy $user
     * @param string $text
     */
    public function __construct(UserProxy $user, string $text)
    {
        $this->user = $user;
        $this->text = $text;
    }
}
