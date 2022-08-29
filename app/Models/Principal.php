<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    use HasFactory;
    protected $fillable = [
        'profile_id',
        'branch_id',
    ];
    protected $casts = [
        'profile_id' => 'integer',
        'branch_id' => 'integer',
    ];
}
