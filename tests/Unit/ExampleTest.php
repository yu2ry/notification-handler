<?php

namespace Notification\Handler\Tests\Unit;

use Illuminate\Support\Facades\Event as LaravelEvent;
use Illuminate\Support\Facades\Notification;
use Notification\Handler\EventManager;
use Notification\Handler\Tests\Proto\DTOs\UserExampleDTO;
use Notification\Handler\Tests\Proto\Event;
use Notification\Handler\Tests\Proto\LaravelNotification;
use Notification\Handler\Tests\Proto\Normalizes\UserNormalizer;
use Notification\Handler\Tests\Proto\NotificationPackageFactory;
use Notification\Handler\Tests\Proto\UserProxy;
use Notification\Handler\Tests\TestCase;
use Notification\Handler\Tests\Proto\Event as EventProto;

/**
 * Class FuncTest
 * @package Notification\Handler\Tests\Unit
 */
class ExampleTest extends TestCase
{

    /**
     * @var UserProxy
     */
    protected $user;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->user = $this->createUser();
    }

    /**
     * @return void
     */
    public function testNormalize(): void
    {
        $normalize = new UserNormalizer();
        $dto = $normalize->getDTO([
            UserNormalizer::ID => $this->user->id,
            UserNormalizer::NAME => $this->user->name,
            UserNormalizer::EMAIL => $this->user->email
        ]);
        $this->assertTrue($dto instanceof UserExampleDTO);
    }

    /**
     * @return void
     */
    public function testEvent(): void
    {
        LaravelEvent::fake();
        EventManager::dispatch($this->createEvent());
        LaravelEvent::assertDispatched(EventProto::class, function (EventProto $event) {
            return
                $event->user->id === $this->user->id &&
                $event->user->name === $this->user->name &&
                $event->user->email === $this->user->email;
        });
    }

    /**
     * @return void
     */
    public function testListener(): void
    {
        $event = $this->createEvent();
        $factory = new NotificationPackageFactory();
        $handler = $factory->make($event);
        Notification::fake();
        $handler->handle($event);
        Notification::assertSentTo(
            $this->user,
            LaravelNotification::class,
            function (LaravelNotification $notification) use ($event) {
                $dto = $notification->getDTO();
                return
                    $dto->recipient->id === $event->user->id &&
                    $dto->message->text === $event->text;
            }
        );
    }

    /**
     * @return UserProxy
     */
    protected function createUser(): UserProxy
    {
        return UserProxy::create([
            UserProxy::FIELD_NAME => $this->faker->name,
            UserProxy::FIELD_EMAIL => $this->faker->email
        ]);
    }

    /**
     * @param string $text
     * @return EventProto
     */
    protected function createEvent(string $text = 'text'): Event
    {
        return new Event($this->user, $text);
    }
}
