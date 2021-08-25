<?php

namespace Notification\Handler\DTOs;

/**
 * Class AttachmentDTO
 * @package Notification\Handler\DTOs
 */
class AttachmentDTO extends BaseDTO
{

    /**
     * @var string[]
     */
    public $files;

    /**
     * AttachmentDTO constructor.
     * @param array $files
     */
    public function __construct(array $files)
    {
        $this->files = $files;
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        return true;
    }
}
