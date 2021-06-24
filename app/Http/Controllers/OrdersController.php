<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
  public function index(){

    $cars = Cars::with('user')->where('user_id', auth()->id())->get();
    // $posts = $cars->user;

    

    // dd($cars);

    return view('orders.index', ['cars' => $cars]);
    
  }
}
