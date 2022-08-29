<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
        'phone_number',
        'email',
        'dob',
        'gender',
    ];

    protected $casts = [

    ];
}
