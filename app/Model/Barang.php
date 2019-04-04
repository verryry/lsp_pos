<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
      'nama',
      'jumlah',
      'via',
      'status',
    ];
}
