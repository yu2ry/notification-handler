<?php

namespace Notification\Handler\Contracts;

/**
 * Interface Normalizer
 * @package Notification\Handler\Contracts
 */
interface Normalizer
{

    /**
     * @param mixed $data
     * @return object
     */
    public function getDTO($data): object;
}
