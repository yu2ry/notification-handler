<?php

namespace Notification\Handler\Tests\Proto\Normalizes;

use Notification\Handler\Abstracts\Normalizer;
use Notification\Handler\Tests\Proto\DTOs\NotificationExampleDTO;

/**
 * Class ExampleNormalizer
 * @package Proto\Normalizes
 */
class NotificationNormalizer extends Normalizer
{

    public const USER = 'user';
    public const MESSAGE = 'message';

    /**
     * @param mixed $data
     * @return NotificationExampleDTO
     */
    public function getDTO($data): object
    {
        $user = $this->app->make(UserNormalizer::class);
        $message = $this->app->make(MessageNormalizer::class);
        return new NotificationExampleDTO(
            $user->getDTO($data[self::USER] ?? $data),
            $message->getDTO($data[self::MESSAGE] ?? null)
        );
    }
}
