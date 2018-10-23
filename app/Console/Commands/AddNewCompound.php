<?php

namespace App\Console\Commands;

use App\Compound;
use Illuminate\Console\Command;

class AddNewCompound extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:compound';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a new compound to the database';

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
     * @return mixed
     */
    public function handle()
    {
        while (true) {
            $compound = $this->ask('Name of the compound');
            Compound::create(['name' => $compound]);
        }
    }
}
