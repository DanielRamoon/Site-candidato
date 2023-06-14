<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    protected $fillable = [
        'name', 'description', 'image', 'galery','users_id',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }

    protected $table = 'collaborators';
}
