<?php

namespace SparkLaravel\Toolbox\Commands;

use Illuminate\Console\Command;

class ToolboxCommand extends Command
{
    public $signature = 'toolbox';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
