<?php

namespace Notification\Handler\DTOs;

/**
 * Class UserDTO
 * @package Notification\Handler\DTOs
 */
abstract class UserDTO extends BaseDTO
{

    /**
     * @var int
     */
    public $id;

    /**
     * UserDTO constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
}
