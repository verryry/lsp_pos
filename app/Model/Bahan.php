<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Bahan extends Model
{
    protected $fillable = [
      'nama_bahan',
      'satuan',
    ];
}
