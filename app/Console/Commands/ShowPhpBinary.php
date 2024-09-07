<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\PhpExecutableFinder;

class ShowPhpBinary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:output-binary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Output the PHP binary path';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dd(
            (new PhpExecutableFinder)->find(false)
        );
    }
}
