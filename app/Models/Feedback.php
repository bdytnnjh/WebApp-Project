<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback'; // Specify the table name
    protected $fillable = ['name', 'email', 'phoneNo', 'message']; // Fillable fields
}

