<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $fillable = [
      'nama',
      'jumlah_keluar',
      'via',
      'status',
    ];
}
