<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = [
        'type', 'name', 'email', 'title', 'phone', 'description',
    ];

    protected $table = 'mails';
}
