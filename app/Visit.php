<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{

    protected $fillable = [
        'start', 'end', 'name',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
