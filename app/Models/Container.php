<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $fillable = [
        'client',
        'number',
        'type',
        'status',
        'category',
    ];

    protected $dates = [
        'created_at'
    ];
}
