<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Image extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'movie_id',
    ];

    public function movies()
    {
        return $this->belongsTo(Movie::class);
    }
}
