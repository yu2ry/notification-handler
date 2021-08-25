<?php

namespace Notification\Handler\DTOs;

/**
 * Class NullDTO
 * @package Notification\Handler\DTOs
 */
final class AttachmentNullDTO extends AttachmentDTO
{

    /**
     * AttachmentNullDTO constructor.
     */
    public function __construct()
    {
        parent::__construct([]);
    }
}
