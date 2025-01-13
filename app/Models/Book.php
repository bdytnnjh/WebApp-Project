<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_email',
        'tour_guide',
        'tour_date',
        'tour_location',
        'additional_requests',
    ];
}
