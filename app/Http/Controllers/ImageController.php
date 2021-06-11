<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index($id){
      
      $car = Cars::findOrFail($id);
      
      return view('img_upload.index', ['car' => $car]);
    }

    public function store(Request $request){
      
      // dd($request);

      $request->validate([
        'img_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

      $filenameWithExt = $request->file('img_name')->getClientOriginalName();

      $filename = $request->name;

      $extension = $request->file('img_name')->getClientOriginalExtension();

      $imageName = time().'-'.$filename.'.'.$extension; 

      $car = Cars::findOrFail($request->id);
      
      

      //UNIKATNO IME
      

      //image ime public v path
      $request->img_name->move(public_path('images'), $imageName);

      
      $image = new Image();
      $image->img_name = $imageName;

      $image->car()->associate($car);
      $image->save();
  
      return redirect()->route('cars');
    }
}
