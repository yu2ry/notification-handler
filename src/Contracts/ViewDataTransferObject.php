<?php

namespace Notification\Handler\Contracts;

/**
 * Interface ViewDataTransferObject
 * @package Notification\Handler\Contracts
 */
interface ViewDataTransferObject
{

    /**
     * @param NotificationDTO $dto
     * @return static
     */
    public static function parseDTO(NotificationDTO $dto): self;
}
