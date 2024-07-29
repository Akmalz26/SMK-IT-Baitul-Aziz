<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_galeri',
        'video'
    ];

    public function galeri()
    {
        return $this->belongsTo(Galeri::class, 'id_galeri');
    }
}
