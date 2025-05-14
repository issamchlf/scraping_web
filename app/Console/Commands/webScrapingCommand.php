<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class webScrapingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:website';
    //the name of the command is scrape:website

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       // the logic of the command : bring the logic of the controller to the command 
    }
}
