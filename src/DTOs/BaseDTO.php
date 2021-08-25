<?php

namespace Notification\Handler\DTOs;

use Notification\Handler\Contracts\DataTransferObject;

/**
 * Class BaseDTO
 * @package Notification\Handler\DTOs
 */
abstract class BaseDTO implements DataTransferObject
{

    /**
     * @return bool
     */
    public function validate(): bool
    {
        return true;
    }
}
