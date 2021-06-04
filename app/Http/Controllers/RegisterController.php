<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index(){

    return view('auth.register');
    
  }
  public function store(Request $request){


    $validated = $request->validate([

      'name' => 'required',
      'surrname' => 'required',
      'email' => 'required|email|unique:users|max:255',
      'password' => 'required|confirmed|min:6',
      
    ]);

    $password = Hash::make($request->password, [
      'rounds' => 12,
    ]);

    

    $user = User::create([
      'name' => $request->name,
      'surrname' => $request->surrname,
      'email' => $request->email,
      'password' => $password
    ]);

    return redirect('/');
    
    
  }
}
