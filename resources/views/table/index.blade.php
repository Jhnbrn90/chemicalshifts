@extends ('layouts.master') 

@section('styles')
<style>
    thead th { 
        position: sticky; 
        top: 0; 
        background-color: #1C3D5A;
        color:white;
        z-index:50;
        padding: 20px 20px;
    }

    a {margin-top: -285px; padding-top: 285px;}
</style>
@endsection

@section('content')
<div class="flex justify-center font-thin tracking-wide text-xl mb-6">
    Chemical shifts of common impurities on NMR
</div>

<div class="flex justify-center mb-4 mt-6">
    <div class="text-center">
        <h3><sup>1</sup>H chemical shifts</h3> 
    </div>
</div>


<div class="container mx-auto">
    <table class="table text-sm">
        <div class="pin-t sticky">
            <thead class="bg-white">
                <tr>
                    <th scope="col">Compound</th>
                    <th>CDCl<sub>3</sub></th>
                    <th>DMSO-d6</th>
                    <th>MeOD</th>
                </tr>
            </thead>
        </div>
        <tbody>
            @foreach ($Hshifts as $compound => $solvents)
            <tr class="{{ request('ref') == $compound ? 'bg-blue-lighter' : '' }}">
                <th scope="row"><a id="{{ $compound }}">{{ $compound }}</a></th>
                <td>
                    @if (isset($solvents['CDCl3']))
                    @forelse($solvents['CDCl3'] as $shift)
                        @if ($shift->value !== null)
                        {{ $shift->value }} 
                        <span class="text-grey-darker"> ({!! $shift->getFormattedOrigin() !!}, {{ $shift->multiplicity }})</span>@if(!$loop->last),<br />@endif
                        @endif
                    @empty
                    @endforelse
                    @endif
                </td>
                <td>
                    @if (isset($solvents['DMSO-d6']))
                    @forelse($solvents['DMSO-d6'] as $shift)
                       @if ($shift->value !== null)
                        {{ $shift->value }} 
                        <span class="text-grey-darker"> ({!! $shift->getFormattedOrigin() !!}, {{ $shift->multiplicity }})</span>@if(!$loop->last),<br />@endif
                        @endif 
                    @empty
                    @endforelse
                    @endif
                </td> 
                <td>
                    @if (isset($solvents['MeOD']))
                    @forelse($solvents['MeOD'] as $shift)
                        @if ($shift->value !== null)
                        {{ $shift->value }} 
                        <span class="text-grey-darker"> ({!! $shift->getFormattedOrigin() !!}, {{ $shift->multiplicity }})</span>@if(!$loop->last),<br />@endif
                        @endif
                    @empty
                    @endforelse
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


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
