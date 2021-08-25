<?php

namespace Notification\Handler\Tests\Proto;

use Notification\Handler\Abstracts\Factory;
use Notification\Handler\Tests\Proto\DTOs\NotificationExampleDTO;

/**
 * Class ExampleFactory
 * @package Proto
 */
class NotificationPackageFactory extends Factory
{

    /**
     * @var string[]
     */
    protected $classes = [
        Event::class => NotificationHandler::class
    ];
}
