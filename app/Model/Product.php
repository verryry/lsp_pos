<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'nama',
      'harga_jual',
      'harga_beli',
      'disc',
      'status',
      'stok',
      'keterangan',
      'id_unit',
      'id_curr',
      'id_kategori',
    ];

    public function kategori()
    {
      return $this->belongsTo('App\Model\Category','id_kategori','id');
    }
    public function unit()
    {
      return $this->belongsTo('App\Model\Unit','id_unit','id');
    }
    public function curr()
    {
      return $this->belongsTo('App\Model\Curr','id_curr','id');
    }
}
