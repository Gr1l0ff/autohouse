<?php

namespace App\Http\Controllers;

use App\Http\Middleware\PreventHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

      return view('auth.login');
      
    }
    public function logIn(Request $request){

      $validated = $request->validate([

        
        'email' => 'required|email|max:255',
        'password' => 'required'
        
      ]);

      if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember_me)) {

        return redirect('/');

      } 

        return back()->withErrors([
          'email' => 'E-naslov ali geslo, ki ste ga vpisali ni pravilno!',
      ]);

    }

    public function logOut(){

      // $this->middleware('auth');
      // $this->middleware('preventHistory');
      Auth::logout();
      return redirect('/');   
      
    }

}
