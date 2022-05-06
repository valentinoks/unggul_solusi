<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'KODE_BARANG',
        'Qty'
    ];

    public function penjualan(){
        return $this->hasMany(App\Models\Penjualan::class, 'NOTA');
    }

    public function barang(){
        return $this->hasMany(App\Models\Barang::class, 'KODE_BARANG');
    }
}
