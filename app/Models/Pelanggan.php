<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'NAMA',
        'DOMISILI',
        'JENIS_KELAMIN'
    ];

    protected $primaryKey = 'ID_PELANGGAN';

    public function penjualan(){
        return $this->hasMany(App\Models\Penjualan::class);
    }
}
