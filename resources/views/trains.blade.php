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
      <th scope="col">Company</th>
      <th scope="col">Departure Station</th>
      <th scope="col">Arrival Station</th>
      <th scope="col">Departure Time</th>
      <th scope="col">Arrival Time</th>
      <th scope="col">Train Code</th>
      <th scope="col">Number of Wagon</th>
      <th scope="col">In Time</th>
      <th scope="col">Deleted</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($trains as $train)
    <tr>
      <th scope="row">{{$train->company}}</th>
      <td>{{$train->departure_station}}</td>
      <td>{{$train->arrival_station}}</td>
      <td>{{$train->departure_time}}</td>
      <td>{{$train->arrival_time}}</td>
      <td>{{$train->train_code}}</td>
      <td>{{$train->number_of_wagon}}</td>
      <td>{{$train->in_time}}</td>
      <td>{{$train->deleted}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection


@section('title')
    Trains
@endsection
