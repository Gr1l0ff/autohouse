@extends('layouts.layout')
@section('content')
  
  <main class="login-main pt-5">
    <div class="container pt-5">
      <h1 class="text-center">Prijava</h1>
      @if ($errors->any())
      @foreach ($errors->all() as $error)
          <div class="alert alert-danger d-flex justify-content-between">
             <p class="m-0">{{ $error }}</p>
             <i class="fa fa-remove err-close"></i>
          </div>
      @endforeach 
      @endif
      <form class="my-4" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1" class="mb-4">Email address</label>
          <input type="email" name="email" class="form-control mb-4 py-2" id="exampleInputEmail1"  placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" class="mb-4">Password</label>
          <input type="password" name="password" class="form-control py-2" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check my-4">
          <input type="checkbox" name="remember_me" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Zapovni se me</label>
        </div>
        <button type="submit" class="btn btn-danger form-control py-2">Submit</button>
      </form>
    </div>
  </main>
  
 
@endsection