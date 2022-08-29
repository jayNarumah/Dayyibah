<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'branch_id',
        'contact_id',
        'date_enrolled',
        'class',
    ];

protected $casts = [
    'profile_id' => 'integer',
    'branch_id' => 'integer',
    'contact_id' => 'integer',
    'date_enrolled' => 'date',
];
}
