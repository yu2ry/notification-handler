<?php

namespace Notification\Handler\Tests\Proto;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserProxy
 * @package Proto
 */
class UserProxy extends Model
{

    const FIELD_ID = 'id';
    const FIELD_NAME = 'name';
    const FIELD_EMAIL = 'email';

    /**
     * @var string[]
     */
    protected $fillable = [
        self::FIELD_NAME,
        self::FIELD_EMAIL
    ];

    /**
     * @var string
     */
    protected $table = 'user_models';
}
