@extends('layouts.layout')
@section('content')
  
  <main class="main-offer pt-5">
    <div class="container pt-5">
      <h1 class="text-center">{{ $car->car_brand }} {{ $car->car_name }}</h1>

        <img src="{{ url("/images/$car->img_name") }}" class="d-block h-40 showImg" alt="{{ $car->car_name }}">

  
        <div class="carInfo">
          <ul class="list-group">
            <li class="list-group-item">Znamka: {{ $car->car_brand }}</li>
            <li class="list-group-item">Ime: {{ $car->car_name }}</li>
            <li class="list-group-item">Top hitrost: {{ $car->top_speed }}</li>
            <li class="list-group-item">Cena: {{ $car->price }}</li>
            
          </ul>
          <button class="btn btn-success form-control mt-3 p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Rezerviraj avtomobil</button>
        </div>
      
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"        aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Rezerviraj Avto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <h4 class="text-center">Vaši podatki</h4>
               <p>Ime: {{ auth()->user()->name }}</p>
               <p>Priimek: {{ auth()->user()->surrname }}</p>
               <p>email: {{ auth()->user()->email }}</p>
              </div>
              <div class="modal-footer">
                <form action="{{ route('car_taken') }}" method="POST">
                  @csrf
                  <input type="hidden" name="car_id" value="{{ $car->car_id }}">

                  <button type="button" class="btn btn-danger mx-2 px-5" data-bs-dismiss="modal">Zapri</button>
                  <button type="submit" class="btn btn-success mx-2 px-5">Potrdi</button>
                </form>
              </div>
            </div>
          </div>
        </div>

    


    </div>
  </main>
 
@endsection