<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
      'unit',
    ];

    public function product()
    {
      return $this->hasMany('App\Model\Product');
    }
}
