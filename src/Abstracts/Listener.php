<?php

namespace Notification\Handler\Abstracts;

use Notification\Handler\Contracts\Factory;
use Notification\Handler\Contracts\Listener as ListenerContract;

/**
 * Class AbstractListener
 * @package Notification\Handler\Abstracts
 */
abstract class Listener implements ListenerContract
{

    /**
     * @var Factory
     */
    protected $factory;

    /**
     * AbstractListener constructor.
     * @param Factory $factory
     */
    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }
}
