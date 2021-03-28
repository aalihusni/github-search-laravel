<?php

namespace App\Console\Commands\GitHub;

use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Console\Command;

class SearchCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gh:search {type} {term}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Search from GitHub';

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
        $response = gh()->search(
            $this->argument('type'), $this->argument('term')
        );

        dd($response);
    }
}
