<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
      'kat',
  ];

  public function product()
  {
      return $this->hasMany('App\Model\Product');
  }
}
