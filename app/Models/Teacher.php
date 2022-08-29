<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'contact_id',
        'specialization_id',
        'area_taught_id',
        'branch_id',
        'marital_status_id',
        'qualification_id',
        'business'
    ];

    protected $casts = [
        'profile_id' => 'integer',
        'contact_id' => 'integer',
        'specialization_id' => 'integer',
        'qualification_id' => 'integer',
        'area_taught_id' => 'integer',
        'branch_id' => 'integer',
        'marital_status_id' => 'integer',
    ];
}
