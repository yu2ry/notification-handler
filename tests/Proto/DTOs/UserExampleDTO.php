<?php

namespace Notification\Handler\Tests\Proto\DTOs;

use Notification\Handler\DTOs\UserDTO;

/**
 * Class UserExampleDTO
 * @package Proto\DTOs
 */
class UserExampleDTO extends UserDTO
{

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $name;

    /**
     * UserExampleDTO constructor.
     * @param int $id
     * @param string $email
     * @param string $name
     */
    public function __construct(int $id, string $name, string $email)
    {
        parent::__construct($id);
        $this->name = $name;
        $this->email = $email;
    }
}
