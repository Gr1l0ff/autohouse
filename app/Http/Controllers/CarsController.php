<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
  public function index(){

    $cars = Cars::with('user')->get();
    // $posts = $cars->user;

    

    // dd($cars);

    return view('cars.index', ['cars' => $cars]);
    
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

    return redirect()->route('cars');
    
  }
  public function index_update($id){

    // dd($id);
    $car = Cars::findOrFail($id);
    return view('cars.update', ['car' => $car]);
    
  }
  public function update(Request $request){

    $validated = $request->validate([

      'car_id' => 'required|numeric',
      'car_name' => 'required',
      'car_brand' => 'required',
      'car_speed' => 'required|numeric',
      'car_price' => 'required|numeric'
      
    ]);

    Cars::where('id',$request->car_id)
    ->update(['car_name'=> $request->car_name,
              'car_brand' => $request->car_brand,
              'top_speed' => $request->car_speed,
              'price' => $request->car_price]);

    return redirect()->route('cars');
    
  }
  
  public function destroy($id){

   Cars::destroy($id);
   return redirect()->route('cars');
  }

}
