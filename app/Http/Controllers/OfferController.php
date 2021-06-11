<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Image;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){


      $cars = Image::with('car')->get();

      // dd($cars);

      return view('offer.index', ['cars' => $cars]);
    }
}
