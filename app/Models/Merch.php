<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'name',
        'price',
        'stock',
        'availability',
        'image',
        'description',
        'size',
        'release_date',
    ];
}
