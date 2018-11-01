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
        $request->validate(
            [
            'shift'     => 'required',
            'solvent'   => 'required',
            'nucleus'   => 'required',
            ]
        );

        if ($request->solvent == 'Chloroform-d') {
            $request->solvent = 'CDCl3';
        }

        $solvent = (new ChemicalFormula($request->solvent))->transform();
        $shift = $request->shift;
        $nucleus = (new ChemicalFormula($request->nucleus))->transformNucleus();

        if ($request->nucleus == '1H') {
            $difference = 0.5;
            
        } elseif ($request->nucleus == '13C') {
            $difference = 6;
        }

        $lowerShift = $request->shift - $difference;
        $upperShift = $request->shift + $difference;

        $shifts = ChemicalShift::where('solvent', $request->solvent)
            ->where('nucleus', $request->nucleus)
            ->whereBetween('value', [$lowerShift, $upperShift])
            ->orderBy('value')
            ->get()
            ->each(
                function ($item) use ($request) {
                    $item['deviation'] = round(abs($item->value - $request->shift), 2);
                }
            )
            ->unique(
                function ($item) {
                    return $item->compound_id;
                }
            )
            ->all();

            usort(
                $shifts, function ($a, $b) {
                    return strcmp($a->deviation, $b->deviation);
                }
            );

            $shifts = collect($shifts);

        return view('search.results', compact('shifts', 'solvent', 'shift', 'nucleus'));
    }
}
