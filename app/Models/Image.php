<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
      'img_name',
     
  ];
  
  public function car()
  {
      return $this->belongsTo(Cars::class);
  }
}
