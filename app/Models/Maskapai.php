<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maskapai extends Model
{
    public function Keberangkatan()
    {
        return $this->hasMany(Keberangkatan::class);
    }
    use HasFactory;

    protected $fillable =
    [
        'nama_maskapai'
    ];
    
}
