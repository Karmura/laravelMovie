<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'tag_id',
        'movie_id',
    ];

    public function movies()
    {
        return $this->belongsTo(Movie::class);
    }
}
