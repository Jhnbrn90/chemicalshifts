<?php

namespace App\Http\Controllers;

use App\ChemicalShift;
use App\ChemicalFormula;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show(Request $request)
    {
        $request->validate([
            'shift'     => 'required',
            'solvent'   => 'required',
            'nucleus'   => 'required',
        ]);

        $solvent = (new ChemicalFormula($request->solvent))->transform();

        $lowerShift = $request->shift * 0.75;
        $upperShift = $request->shift * 1.25;

        $shifts = ChemicalShift::where('solvent', $request->solvent)
            ->where('nucleus', $request->nucleus)
            ->whereBetween('value', [$lowerShift, $upperShift])
            ->orderBy('value')
            ->get()
            ->each(function ($item) use ($request) {
                $item['deviation'] = round(abs($item->value - $request->shift), 2);
            })
            ->unique(function ($item) {
                return $item->compound_id;
            });

        return view('search.results', compact('shifts', 'solvent'));
    }
}
