<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'TGL',
        'KODE_PELANGGAN',
        'SUBTOTAL'
    ];

    protected $primaryKey = 'ID_NOTA';

    public function pelanggans(){
        return $this->belongsTo(App\Models\Pelanggan::class, 'KODE_PELANGGAN');
    }

    public function item_penjualan(){
        return $this->hasMany(App\Models\Item_Penjualan::class);
    }

    const UPDATED_AT = NULL;
    const CREATED_AT = NULL;
}
