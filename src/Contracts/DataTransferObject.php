<?php

namespace Notification\Handler\Contracts;

/**
 * Interface DTO
 * @package Notification\Handler\Contracts
 */
interface DataTransferObject
{

    /**
     * @return bool
     */
    public function validate(): bool;
}
