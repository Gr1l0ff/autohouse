@extends('layouts.layout')
@section('content')
  
  <main class="register-main pt-5 pb-4">
    <div class="container pt-5">
      <h1 class="text-center">Registracija</h1>
      @if ($errors->any())
      @foreach ($errors->all() as $error)
          <div class="alert alert-danger d-flex justify-content-between">
             <p class="m-0">{{ $error }}</p>
             <i class="fa fa-remove err-close"></i>
          </div>
      @endforeach 
      @endif
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name" class="mb-3">Ime:</label>
          <input type="text" name="name" class="form-control mb-3 py-2" id="name" value="{{ old('name') }}"  placeholder="Ime">
        </div>
        <div class="form-group">
          <label for="surrname" class="mb-3">Priimek:</label>
          <input type="text" name="surrname" class="form-control py-2 mb-3" id="surrname" value="{{ old('surrname') }}" placeholder="Priimek">
        </div>
        <div class="form-group">
          <label for="email" class="mb-3">E-naslov:</label>
          <input type="email" name="email" class="form-control py-2 mb-3" value="{{ old('email') }}" id="email" placeholder="E-naslov">
        </div>
        <div class="form-group">
          <label for="password" class="mb-3">Geslo:</label>
          <input type="password" name="password" class="form-control py-2 mb-3" id="password" placeholder="Geslo">
        </div>
        <div class="form-group">
          <label for="password_confirmation" class="mb-3">Ponovi geslo:</label>
          <input type="password" name="password_confirmation" class="form-control py-2 mb-4" id="password_confirmation" placeholder="Ponovi geslo">
        </div>
        <button type="submit" class="btn btn-danger form-control py-2">Submit</button>
      </form>
    

  </main>
 
@endsection