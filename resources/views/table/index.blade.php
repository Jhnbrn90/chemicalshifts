@extends ('layouts.master') 
@section('content')
<div class="flex justify-center font-thin tracking-wide text-xl mb-6">
    Chemical shifts of common impurities on NMR
</div>

<div class="flex justify-center mb-4 mt-6">
    <div class="text-center">
        <h2><sup>1</sup>H chemical shifts</h2>
    </div>
</div>

<div class="container mx-auto">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Compound</th>
                <th scope="col">Origin</th>
                <th scope="col">Multiplicity</th>
                @foreach ($solvents as $solvent)
                <th scope="col">{!! $solvent !!}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

@foreach($Hshifts as $compound => $shifts) 
    <h2>{{ $compound }}</h2>

    @foreach ($shifts as $solvent => $shifts)
        <h3>{{ $solvent }}</h3>
        <ul>
            @foreach ($shifts as $shift)
            <li>{{ $shift->value }}</li>
            @endforeach
        </ul>
    @endforeach
@endforeach

<div class="flex justify-center mb-4 mt-12">
    <div class="text-center">
        <h2><sup>13</sup>C chemical shifts</h2>
    </div>
</div>

<div class="container mx-auto">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Compound</th>
                <th scope="col">Origin</th>
                <th scope="col">Multiplicity</th>
                <th scope="col">CDCl<sub>3</sub></th>
                <th scope="col">DMSO-d6</th>
                <th scope="col">MeOD</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
@endsection
