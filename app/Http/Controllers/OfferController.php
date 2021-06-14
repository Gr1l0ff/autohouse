<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    public function index(){


      $cars = DB::table('images')->join('cars', 'images.car_id', '=', 'cars.id')->where('cars.user_id', 'not', '0')->paginate(5);

      // dd($cars);

      return view('offer.index', ['cars' => $cars]);
    }
    public function show($id){


      $car = DB::table('images')->join('cars', 'images.car_id', '=', 'cars.id')->where('cars.id', '=', $id)->get();

      

      return view('offer.show', ['car' => $car[0]]);


    }
    public function store(Request $request){

      $car = Cars::find($request->car_id);
      
      $car->user_id = Auth::id();

      $car->save();

      return redirect()->route('offer');


    }
}
