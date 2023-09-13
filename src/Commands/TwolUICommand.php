<?php

namespace Ercanertan\TwolUI\Commands;

use Illuminate\Console\Command;

class TwolUICommand extends Command
{
    public $signature = 'twol-ui';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
