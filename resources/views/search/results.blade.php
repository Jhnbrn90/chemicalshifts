@extends ('layouts.master') 

@section('content')
<div class="flex justify-center font-thin tracking-wide text-xl mb-6">
  Chemical shifts of common impurities on NMR
</div>

<div class="flex justify-center mb-4 mt-6">
  <div class="text-center">
    <h2 class="text-blue-darker mb-2">{!! $nucleus !!} Shifts for {{ $shift }} ppm in {!! $solvent !!} </h2>
    <a class="text-sm text-blue hover:text-blue-lighter" href="/">Search again</a>
  </div>
</div>

<div class="container mx-auto">
  <table class="table table-fixed">
    <thead>
      <tr>
        <th scope="col">Compound</th>
        <th scope="col">Origin</th>
        <th scope="col">Multiplicity</th>
        <th scope="col">Shift (ppm)</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($shifts as $shift)
      <tr>
        <th><a class="text-grey-darkest no-underline hover:text-blue-dark" href="/table?ref={{ $shift->compound->name }}#{{ $shift->compound->name }}">{{ $shift->compound->name }}</a></th>
        <td>{{ $shift->origin }}</td>
        <td>{{ $shift->multiplicity }}</td>
        <td>
          {{ $shift->value }}
        </td>
      </tr>
      @empty
      <tr class="table-info">
        <td colspan="4">
          <center>No results.</center>
        </td>
      </tr>
      @endforelse
    </tbody>
  </table>

</div>
@endsection
