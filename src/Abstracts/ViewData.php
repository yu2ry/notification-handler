<?php

namespace Notification\Handler\Abstracts;

use Notification\Handler\Contracts\NotificationDTO;
use Notification\Handler\Contracts\ViewDataTransferObject;

/**
 * Class AbstractViewData
 * @package Notification\handler\Support
 */
class ViewData implements ViewDataTransferObject
{

    protected $dto;

    /**
     * AbstractViewData constructor.
     * @param NotificationDTO $dto
     */
    protected function __construct(NotificationDTO $dto)
    {
        $this->dto = $dto;
    }

    /**
     * @param NotificationDTO $dto
     * @return ViewDataTransferObject
     */
    public static function parseDTO(NotificationDTO $dto): ViewDataTransferObject
    {
        return new static($dto);
    }
}
