@extends('layouts.layout')
@section('content')
  
  <main class="main-cars pt-5">
    <div class="container pt-5">
      <h1 class="text-center pb-5">Vaša Naročila</h1>

      <table class="table table-dark table-hover mx-3 mt-5 align-middle">
        <thead>
          <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Ime</th>
            <th scope="col">Znamka</th>
            <th scope="col">Lastnik</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($cars as $car )
            
          <tr class="text-center">
            <th scope="row">{{ $car->id }}</th>
            <td class="mb-2">{{ $car->car_name }}</td>
            <td>{{ $car->car_brand }}</td>
            <td>{{ $car->user['name'] }} {{ $car->user['surrname'] }}</td>

          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </main>
 
@endsection