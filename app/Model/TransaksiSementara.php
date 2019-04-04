<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class TransaksiSementara extends Model
{
  protected $fillable = [
    'nama',
    'nama',
    'jumlah',
    'unit',
    'harga',
  ];
}
