<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
  public function index(){

    return view('cars.index');
    
  }

  public function index_store(){

    return view('cars.add');
    
  }

  public function store(Request $request){

    $validated = $request->validate([

      'car_name' => 'required',
      'car_brand' => 'required',
      'car_speed' => 'required|numeric',
      'car_price' => 'required|numeric'
      
    ]);

    $user = Cars::create([

      'car_name' => $request->car_name,
      'car_brand' => $request->car_brand,
      'top_speed' => $request->car_speed,
      'price' => $request->car_price

    ]);

    return redirect('/');
    
  }
}
