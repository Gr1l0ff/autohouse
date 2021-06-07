@extends('layouts.layout')
@section('content')
  
  <main class="main-cars pt-5">
    <div class="container pt-5">
      <h2 class="text-center">Dodaj Avto</h2>
      @if ($errors->any())
      @foreach ($errors->all() as $error)
          <div class="alert alert-danger d-flex justify-content-between">
             <p class="m-0">{{ $error }}</p>
             <i class="fa fa-remove err-close"></i>
          </div>
      @endforeach 
      @endif
      <form class="my-4" action="{{ route('car_add') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="car_name" class="mb-3 fs-4">Ime Avta:</label>
          <input type="text" name="car_name" class="form-control mb-4 py-2" id="car_name"  placeholder="Ime" value="{{ old('car_name') }}">
        </div>
        <div class="form-group">
          <label for="car_brand" class="mb-3 fs-4">Znamka:</label>
          <input type="text" name="car_brand" class="form-control mb-4 py-2" id="car_brand"  placeholder="Znamka" value="{{ old('car_brand') }}">
        </div>
        <div class="form-group">
          <label for="car_speed" class="mb-3 fs-4">Največja Hitrost:</label>
          <input type="text" name="car_speed" class="form-control mb-4 py-2" id="car_speed"  placeholder="Hitrost" value="{{ old('car_speed') }}">
        </div>
        <div class="form-group">
          <label for="price" class="mb-3 fs-4">Cena:</label>
          <input type="text" name="car_price" class="form-control py-2" id="price" placeholder="Cena" value="{{ old('car_price') }}">
        </div>
        <button type="submit" class="btn btn-danger form-control py-2 mt-5">Submit</button>
      </form>

    </div>
  </main>
 
@endsection