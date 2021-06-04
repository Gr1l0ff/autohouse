@extends('layouts.layout')
@section('content')

  <div class="main-home">
    <div id="home-heading">
      <h2>Auto House Celje</h2>
      <p>Najbolj luksuzni avto je pri nas, samo za vas</p>
    </div>
  </div>
  <section class="car-section">
    <div>
      <img src="{{ asset('img/1car.jpg') }}" alt="car1">
      <p>Vsi porscheji, samo pri nas</p>
    </div>
    <div>
      <img src="{{ asset('img/2car.jpg') }}" alt="car2">
      <p>Najnovejši jaguarji, samo pri nas</p>
    </div>
    <div>
      <img src="{{ asset('img/3car.jpg') }}" alt="car3">
      <p>Mercedesi vseh klas, tudi pri  nas</p>
    </div>
  </section>
  <section id="email-form">
    <div>
      
        <div class="mb-3 form-div">
          <form action="">
            <h3 class="text-center"> Prijavite se na naše e-novice!</h3>
            <label for="email" class="form-label fw-bold mb-3">Vaš e-naslov:</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <button type="submit" class="btn btn-secondary form-control mt-5">Submit</button>
          </form>
        </div>
     
    </div>
  </section>
@endsection