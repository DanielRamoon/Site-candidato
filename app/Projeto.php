<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'name', 'author', 'description', 'image','users_id',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }

    protected $table = 'projects';
}
