<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChemicalShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemical_shifts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('compound_id');
            $table->enum('solvent', ['CDCl3', 'DMSO-d6', 'MeOD']);
            $table->enum('nucleus', ['1H', '13C']);
            $table->decimal('value', 8, 2);
            $table->string('multiplicity', 8)->nullable();
            $table->string('origin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chemical_shifts');
    }
}
