<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'name', 'description', 'archive','users_id',
    ];

    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }

    protected $table = 'notices';
}
