<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    protected $fillable = [
        'container_id',
        'type',
        'start',
        'end',
    ];

    protected $dates = [
        'start',
        'end',
    ];

    #RELATIONs
    public function container()
    {
      return $this->hasOne(Container::class, 'id', 'container_id');
    }
}
