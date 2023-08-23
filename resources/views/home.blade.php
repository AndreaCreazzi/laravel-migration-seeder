@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero Carrozza</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{ $train->agencies }}</th>
                    <td>{{ $train->stations_departures }}</td>
                    <td>{{ $train->stations_arrivals }}</td>
                    <td>{{ $train->times_departures }}</td>
                    <td>{{ $train->times_arrivals }}</td>
                    <td>{{ $train->trains_code }}</td>
                    <td>{{ $train->numbers_carriages }}</td>
                    <td>{{ $train->printTime() }}</td>
                    <td>{{ $train->printCancelled() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
