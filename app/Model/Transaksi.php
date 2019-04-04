<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
      'nama',
      'kodetransaksi',
      'nama',
      'jumlah',
      'unit',
      'harga',
    ];
}
