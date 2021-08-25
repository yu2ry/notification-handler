<?php

namespace Notification\Handler\Tests\Proto\Normalizes;

use Notification\Handler\Abstracts\Normalizer;
use Notification\handler\DTOs\UserDTO;
use Notification\Handler\Tests\Proto\DTOs\UserExampleDTO;

/**
 * Class UserExampleNormalizer
 * @package Proto\Normalizes
 */
class UserNormalizer extends Normalizer
{

    const ID = 'id';
    const NAME = 'name';
    const EMAIL = 'email';

    /**
     * @param mixed $data
     * @return UserExampleDTO
     */
    public function getDTO($data): object
    {
        return new UserExampleDTO(
            $data[self::ID],
            $data[self::NAME],
            $data[self::EMAIL]
        );
    }
}
