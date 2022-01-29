<?php

namespace App\Console\Commands;

use App\Http\Controllers\MainController;
use Illuminate\Console\Command;
use Symfony\Component\Console\Output\ConsoleOutput;

class Collections extends Command
{
    protected $mainController;
    protected $console;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collections:average';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command to run average function';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->mainController = new MainController();
        $this->console =  new ConsoleOutput();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->console->writeln($this->mainController->average());
    }
}
