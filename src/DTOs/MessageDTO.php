<?php

namespace Notification\Handler\DTOs;

/**
 * Class MessageDTO
 * @package Notification\Handler\DTOs
 */
class MessageDTO extends BaseDTO
{

    /**
     * @var string
     */
    public $text;

    /**
     * @var AttachmentDTO[]
     */
    public $attachments;

    /**
     * MessageDTO constructor.
     * @param string|null $text
     * @param array $attachments
     */
    public function __construct(?string $text, array $attachments = [])
    {
        $this->text = $text;
        $this->attachments = $attachments;
    }
}
