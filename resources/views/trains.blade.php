@extends('layout.main')
{{-- Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato --}}



@section('content')
<div class="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Azienda</th>
      <th scope="col">Stazione di Partenza</th>
      <th scope="col">Stazione di Arrivo</th>
      <th scope="col">Orario di Partenza</th>
      <th scope="col">Orario di Arrivo</th>
      <th scope="col">Codice Treno</th>
      <th scope="col">Numero Carrozze</th>
      <th scope="col">In Orario</th>
      <th scope="col">Cancellato</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($trains as $train)
    <tr>
      <th scope="row">{{$train->azienda}}</th>
      <td>{{$train->stazione_di_partenza}}</td>
      <td>{{$train->stazione_di_arrivo}}</td>
      <td>{{$train->orario_di_partenza}}</td>
      <td>{{$train->orario_di_arrivo}}</td>
      <td>{{$train->codice_treno}}</td>
      <td>{{$train->numero_carrozze}}</td>
      <td>{{$train->in_orario}}</td>
      <td>{{$train->cancellato}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection


@section('title')
    Trains
@endsection
