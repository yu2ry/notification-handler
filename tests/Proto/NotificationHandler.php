<?php

namespace Notification\Handler\Tests\Proto;

use Notification\Handler\Contracts\Handler;
use Notification\Handler\Abstracts\Event as AbstractEvent;
use Notification\Handler\Tests\Proto\Normalizes\MessageNormalizer;
use Notification\Handler\Tests\Proto\Normalizes\NotificationNormalizer;
use Notification\Handler\Tests\Proto\Normalizes\UserNormalizer;

/**
 * Class ExampleHandler
 * @package Proto
 */
class NotificationHandler implements Handler
{

    /**
     * @var NotificationNormalizer
     */
    protected $notificationNormalizer;

    /**
     * NotificationHandler constructor.
     * @param NotificationNormalizer $notificationNormalizer
     */
    public function __construct(NotificationNormalizer $notificationNormalizer)
    {
        $this->notificationNormalizer = $notificationNormalizer;
    }

    /**
     * @param Event $event
     */
    public function handle(AbstractEvent $event): void
    {
        NotificationHelper::send(
            $this->notificationNormalizer->getDTO([
                NotificationNormalizer::USER => [
                    UserNormalizer::ID => $event->user->id,
                    UserNormalizer::NAME => $event->user->name,
                    UserNormalizer::EMAIL => $event->user->email
                ],
                NotificationNormalizer::MESSAGE => [
                    MessageNormalizer::TEXT => $event->text
                ]
            ]),
            LaravelNotification::class
        );
    }
}
