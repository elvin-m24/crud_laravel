<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keberangkatan extends Model
{    
    use HasFactory;

    protected $fillable = 
    [
        'asal',
        'tujuan',
        'tgl_berangkat',
        'harga'
    ];
}
