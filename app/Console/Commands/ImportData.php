<?php

namespace App\Console\Commands;

use App\Compound;
use App\ChemicalShift;
use Illuminate\Console\Command;

class ImportData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:1h';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import the 1H values for compounds';

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
        $compounds = Compound::all();
        foreach ($compounds as $compound) {
            if ($compound->shifts()->count() > 0) {
                $this->info('Skipping '. $compound->name);
                continue;
            }
            $solvents = [];
            while (!isset($finished[$compound->id])) {
                $this->info('Please enter info for: ' . $compound->name);
                $origin = $this->ask('Origin of signal, e.g. CH3');
                $multiplicity = $this->ask('Multiplicity');
                $solvents['CDCl3'] = $this->ask('Value for CDCl3');
                $solvents['DMSO-d6'] = $this->ask('Value for DMSO-d6');
                $solvents['MeOD'] = $this->ask('Value for MeOD');

                foreach ($solvents as $name => $value) {
                    ChemicalShift::create(
                        [
                        'compound_id'   => $compound->id,
                        'origin'        => $origin,
                        'multiplicity'  => $multiplicity,
                        'solvent'       => $name,
                        'value'         => $value,
                        'nucleus'       => '1H'
                        ]
                    );

                    $this->info('Written ' . $name);
                }

                if (!$this->confirm('Add more signals?')) {
                    $finished[$compound->id] = true;
                }
            }
        }
    }
}
