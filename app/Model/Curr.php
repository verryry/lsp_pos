<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Curr extends Model
{
    protected $fillable = [
      'curr',
    ];

    public function product()
    {
      return $this->hasMany('App\Model\Product');
    }
}
