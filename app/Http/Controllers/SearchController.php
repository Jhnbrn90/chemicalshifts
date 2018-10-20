<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show(Request $request)
    {
        // $request->validate([
        //     'shift'     => 'required',
        //     'solvent'   => 'required',
        //     'nucleus'   => 'required',
        // ]);

        dd($request->shift, $request->solvent, $request->nucleus);

        return view('search.results');
    }
}
