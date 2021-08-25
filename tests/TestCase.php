<?php

namespace Notification\Handler\Tests;

use Illuminate\Bus\BusServiceProvider;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;

/**
 * Class TestCase
 * @package Notification\Handler\Tests
 */
class TestCase extends \Orchestra\Testbench\TestCase
{

    use WithFaker;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }


    /**
     * @param $app
     * @return void
     */
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('app.key', Str::random(20));
        $app['config']->set('app.debug', true);
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

    /**
     * @param $app
     * @return string[]
     */
    protected function getPackageProviders($app): array
    {
        return [
            BusServiceProvider::class,
        ];
    }
}
