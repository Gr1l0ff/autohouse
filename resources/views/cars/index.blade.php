@extends('layouts.layout')
@section('content')
  
  <main class="main-cars pt-5">
    <div class="container pt-5">
      <h1 class="text-center pb-5">Admin panel</h1>
      <a href="{{ route('car_add') }}" class="btn btn-primary form-control text-center p-2 m-3 text-decoration-none">Dodaj Avto</a>

      <table class="table table-dark table-hover mx-3 mt-5 align-middle">
        <thead>
          <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Ime</th>
            <th scope="col">Znamka</th>
            <th scope="col">Lastnik</th>
            <th scope="col">Posodobi</th>
            <th scope="col">Zbriši</th>
            <th scope="col">Dodaj Sliko</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cars as $car )
            
          <tr class="text-center">
            <th scope="row">{{ $car->id }}</th>
            <td class="mb-2">{{ $car->car_name }}</td>
            <td>{{ $car->car_brand }}</td>
            @if($car->user_id != 0)
            <td>{{ $car->user['surrname'] }}</td>
            @else 
            <td>{{ $car->user_id }}</td>
            @endif
            <td><a href="{{ route('update_cars', ['id' => $car->id] )}}"class="btn btn-warning">Posodobi</a></td>
            <td><a href="{{ route('delete_cars', ['id' => $car->id] )}}"class="btn btn-danger" onclick="return confirm('Ali ste prepričani, da hočete zbrisati ta avto?')">Zbriši</a></td>
            <td><a href="{{ route('image_index', ['id' => $car->id] )}}"class="btn btn-success">Dodaj Sliko</a></td>
           
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </main>
 
@endsection