<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_galeri',
        'foto'
    ];

    public function galeri()
    {
        return $this->belongsTo(Galeri::class, 'id_galeri');
    }
}
