<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'full_name',
        'matric_no',
        'email',
        'phone_number'
    ];
}
