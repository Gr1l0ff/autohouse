@extends('layouts.layout')
@section('content')
  
  <main class="main-cars pt-5">
    <div class="container pt-5">
      <h2 class="text-center pt-5">Naloži Sliko</h2>
      @if ($errors->any())
      @foreach ($errors->all() as $error)
          <div class="alert alert-danger d-flex justify-content-between">
             <p class="m-0">{{ $error }}</p>
             <i class="fa fa-remove err-close"></i>
          </div>
      @endforeach 
      @endif
      <form class="my-5" action="{{ route('image_upload') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $car->id }}">
        <input type="hidden" name="name" value="{{ $car->car_name }}">
        <div class="form-group">
          <label for="car_name" class="mb-3 fs-4">Ime Avta: {{ $car->car_name }}</label>
          <label for="car_name" class="mb-3 fs-4">Ime Avta: {{ $car->car_brand }}</label>
          <div class="form-group">
            <label for="car_brand" class="mb-5 fs-4">Izberi sliko:</label>
            <input type="file" name="img_name" class="form-control mb-4 py-2 text-center"  placeholder="Znamka">
        </div>
        <button type="submit" class="btn btn-danger form-control py-2 mt-3">Submit</button>
      </form>

    </div>
  </main>
 
@endsection