<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Inspiring;

class LogginInspiringQuote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:log-quote';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Log an inspiring quote';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::channel('quotes')->info(Inspiring::quote());
    }
}
