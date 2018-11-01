<?php

namespace App\Console\Commands;

use App\Compound;
use App\ChemicalShift;
use Illuminate\Console\Command;

class Import13CData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:13c';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import the 13C data for compounds.';

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
            if ($compound->shifts()->where('nucleus', '13C')->count() > 0) {
                $this->info('Skipping '. $compound->name);
                continue;
            }

            if($this->confirm('Skip entry ' . $compound->name . ' ?')) {
                $this->info('Skipping '. $compound->name);
                continue;
            }

            $solvents = [];
            while (!isset($finished[$compound->id])) {
                $this->info('Please enter info for: ' . $compound->name);
                $origin = $this->ask('Origin of signal, e.g. CH3');
                $solvents['CDCl3'] = $this->ask('Value (ppm) for CDCl3');
                $solvents['DMSO-d6'] = $this->ask('Value (ppm) for DMSO-d6');
                $solvents['MeOD'] = $this->ask('Value (ppm) for MeOD');

                foreach ($solvents as $name => $value) {
                    ChemicalShift::create(
                        [
                        'compound_id'   => $compound->id,
                        'origin'        => $origin,
                        'solvent'       => $name,
                        'value'         => $value,
                        'nucleus'       => '13C'
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
