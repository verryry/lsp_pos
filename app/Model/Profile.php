<?php

namespace App\Model;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Profile extends Model
{
  protected $fillable = [
      'nama_koperasi',
      'alamat_koperasi',
      'keterangan',
      'telepon',
      'image',
      'kode_pos',
  ];
}
