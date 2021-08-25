<?php

namespace Notification\Handler\Abstracts;

use Illuminate\Container\Container;
use Notification\Handler\Contracts\Normalizer as NormalizeContract;

/**
 * Class AbstractNormalizer
 * @package Notification\Handler\Support
 */
abstract class Normalizer implements NormalizeContract
{

    /**
     * @var Container
     */
    protected $app;

    /**
     * Normalizer constructor.
     * @param Container|null $container
     */
    public function __construct(Container $container = null)
    {
        $this->app = $container ?? Container::getInstance();
    }
}
