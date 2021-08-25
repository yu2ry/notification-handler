<?php

namespace Notification\Handler\Tests\Proto\Normalizes;

use Notification\Handler\Abstracts\Normalizer;
use Notification\Handler\DTOs\MessageDTO;

/**
 * Class MessageNormalizer
 * @package Notification\Handler\Tests\Proto\Normalizes
 */
class MessageNormalizer extends Normalizer
{

    const TEXT = 'text';
    const ATTACHMENTS = 'attachments';

    /**
     * @param mixed $data
     * @return object
     */
    public function getDTO($data): object
    {
        return new MessageDTO(
            $data[self::TEXT] ?? null,
            $data[self::ATTACHMENTS] ?? []
        );
    }
}
