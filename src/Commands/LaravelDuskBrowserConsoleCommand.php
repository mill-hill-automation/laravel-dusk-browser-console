<?php

namespace MHA\LaravelDuskBrowserConsole\Commands;

use Illuminate\Console\Command;

class LaravelDuskBrowserConsoleCommand extends Command
{
    public $signature = 'laravel-dusk-browser-console';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
