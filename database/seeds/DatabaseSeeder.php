<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents('database/seeds/compounds.sql'));
        $this->command->info('Compounds table seeded!'); 

        DB::unprepared(file_get_contents('database/seeds/chemical_shifts.sql'));
        $this->command->info('Chemical Shifts table seeded!');
    }
}
