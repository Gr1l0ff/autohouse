<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
      'car_name',
      'car_brand',
      'top_speed',
      'price',
  ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
