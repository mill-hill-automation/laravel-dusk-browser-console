<?php

namespace MHA\LaravelDuskBrowserConsole\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MHA\LaravelDuskBrowserConsole\LaravelDuskBrowserConsole
 */
class LaravelDuskBrowserConsole extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-dusk-browser-console';
    }
}
