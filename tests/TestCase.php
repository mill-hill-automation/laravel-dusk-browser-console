<?php

namespace MHA\LaravelDuskBrowserConsole\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MHA\LaravelDuskBrowserConsole\LaravelDuskBrowserConsoleServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MHA\\LaravelDuskBrowserConsole\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDuskBrowserConsoleServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-dusk-browser-console_table.php.stub';
        $migration->up();
        */
    }
}
