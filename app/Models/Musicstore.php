<?php

namespace App\Models;

use App\Models\Songs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musicstore extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_title',
        'album_artist',
        'song_name',
        'album_date',
        'album_image',
        'album_price',
        'album_genre',
        'album_description'
    ];

    public function songs()
    {
        return $this->hasMany(Songs::class);
    }
}
