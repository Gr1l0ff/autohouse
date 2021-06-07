@extends('layouts.layout')
@section('content')
  
  <main class="main-cars pt-5">
    <div class="container pt-5">
      <h1 class="text-center pb-5">Admin panel</h1>
      <a href="{{ route('car_add') }}" class="btn btn-primary form-control text-center p-2 m-3 text-decoration-none">Dodaj Avto</a>
      <a href="btn" class="btn btn btn-warning form-control text-center p-2 m-3 text-decoration-none">Posodobi Avto</a>
      <a href="btn" class="btn btn-success form-control text-center p-2 m-3 text-decoration-none">Dodaj Sliko Avta</a>
      <a href="btn" class="btn btn-danger form-control text-center p-2 m-3 text-decoration-none">Izbriši Avto</a>

    </div>
  </main>
 
@endsection