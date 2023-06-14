<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'name', 'author', 'description', 'image', 'doc','users_id',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }

    protected $table = 'news';
}
