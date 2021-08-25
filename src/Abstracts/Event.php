<?php

namespace Notification\Handler\Abstracts;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Class EventAbstract
 * @package Notification\handler
 */
abstract class Event
{
    use Dispatchable, SerializesModels;
}
