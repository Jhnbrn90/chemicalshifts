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
        $Hshifts = ChemicalShift::with('compound')
            ->where('nucleus', '1H')
            ->get()
            ->groupBy(['compound.name', 'solvent']);

        $Cshifts = ChemicalShift::with('compound')
            ->where('nucleus', '13C')
            ->get()
            ->groupBy(['compound.name', 'solvent']);

        return view('table.index', compact('Hshifts', 'Cshifts'));
    }
}
