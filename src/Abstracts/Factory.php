<?php

namespace Notification\Handler\Abstracts;

use Illuminate\Contracts\Container\Container;
use Notification\Handler\Contracts\Factory as FactoryContract;
use Notification\Handler\Contracts\Handler;

/**
 * Class FactoryAbstract
 * @package Notification\Handler\Support
 */
abstract class Factory implements FactoryContract
{

    /**
     * @var array
     */
    protected $classes = [
        //Event::class => Handler::class
    ];

    /**
     * @var Container
     */
    protected $container;

    /**
     * FactoryAbstract constructor.
     * @param Container|null $container
     */
    public function __construct(Container $container = null)
    {
        $this->container = $container ?? \Illuminate\Container\Container::getInstance();
    }

    /**
     * @param Event $event
     * @param array $params
     * @return Handler
     */
    public function make(Event $event, array $params = []): Handler
    {
        $obj = get_class($event);
        if (! array_key_exists($obj, $this->classes)) {
            throw new \InvalidArgumentException(sprintf('event %s invalid', $obj));
        }
        return $this->container->make($this->classes[$obj], $params);
    }
}
