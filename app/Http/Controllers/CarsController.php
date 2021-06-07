<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
  public function index(){

    return view('cars.index');
    
  }

  public function index_store(){

    return view('cars.add');
    
  }
}
