<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'title',
        'description',
        'priority',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
