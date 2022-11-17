<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUangMasuk extends Model
{
    use HasFactory;

    protected $table = 'data_uang_masuks';
    
    protected $fillable = [
        'jumlah',
        'bulan'
    ];
}