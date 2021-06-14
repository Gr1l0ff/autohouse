@extends('layouts.layout')
@section('content')
  
  <main class="main-offer pt-5">
    <div class="container pt-5">
      <h1 class="text-center">Naša ponudba luksuznih avtomobilov</h1>

      <div class="row py-5">

      @foreach ($cars as $car)
        
   
      
      <div class="card col-4 mt-3 mx-2 p-0 bg-light" style="width: 18rem;">
        <img src="{{url("/images/$car->img_name")}}" style="height: 12rem;"  class="card-img-top p-0" alt="{{ $car->car_name }} picture">
        <div class="card-body">
          <h5 class="card-title text-center">{{ $car->car_brand  }} {{ $car->car_name  }}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{ route('offer_cars', ['id' => $car->car_id] )}}" class="btn btn-primary form-control">Poglej podrobnosti</a>
        </div>
      </div>

      @endforeach

     

    

    </div>
      {{-- <div class="paginate">
        {{ $cars->links() }}
      </div> --}}
      <div class="d-flex justify-content-center align-items-center">
        {{ $cars->links() }}
    </div>
    </div>
   
  </main>
 
@endsection