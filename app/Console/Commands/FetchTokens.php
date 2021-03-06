<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Jobs\FetchTokens as FetchTokensJob;

class FetchTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:tokens';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch economic tokens and store them.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        FetchTokensJob::dispatch()->onQueue('nydronia');
    }
}
