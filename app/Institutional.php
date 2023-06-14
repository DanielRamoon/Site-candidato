<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institutional extends Model
{
    protected $fillable = [
        'type', 'description',
    ];

    protected $table = 'institutional';
}
