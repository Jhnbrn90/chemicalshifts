<?php

namespace App\Http\Controllers;

use App\Compound;
use App\ChemicalShift;
use App\ChemicalFormula;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $Hshifts = ChemicalShift::with('compound')->where('nucleus', '1H')->get()->groupBy(['compound.name', 'solvent']);

        $solvents = ChemicalShift::all()
            ->pluck('solvent')
            ->unique()
            ->map(
                function ($solvent) {
                    return (new ChemicalFormula($solvent))->transform();
                }
            );

        return view('table.index', compact('Hshifts', 'solvents'));
    }
}
