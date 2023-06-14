<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multimidia extends Model
{
    protected $fillable = [
        'name', 'description', 'image','users_id',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }

    protected $table = 'multimedias';
}
