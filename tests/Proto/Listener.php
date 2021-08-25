<?php

namespace Notification\Handler\Tests\Proto;

use Notification\Handler\Abstracts\Listener as AbstractListener;
use Notification\Handler\Abstracts\Event as AbstractEvent;

/**
 * Class Listener
 * @package Notification\Handler\Tests\Proto
 */
class Listener extends AbstractListener
{

    /**
     * @param Event $event
     * @return void
     */
    public function handle(AbstractEvent $event): void
    {
        $this
            ->factory
            ->make($event)
            ->handle($event);
    }
}
