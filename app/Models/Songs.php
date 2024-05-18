<?php

namespace App\Models;

use App\Models\Musicstore;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Songs extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_name',
        'song_artist',
        'song_genre',
        'song_duration',
        'musicstore_id'
    ];

    public function musicstore()
    {
        return $this->belongsTo(Musicstore::class);
    }

}
