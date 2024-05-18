<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    use HasFactory;
    protected $fillable = [
        'tour_title',
        'tour_description',
        'tour_image', // Add this line
        'ticket_price',
        'ticket_stock',
        'tour_date',
        'location',
        'theatre',
    ];
}
