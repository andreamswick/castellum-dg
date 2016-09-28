<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'priority',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public static function purchased_count()
    {
        return Item::where('user_id', '<>', null)->count();
    }

    public static function needed_count()
    {
        return Item::where('user_id', null)->count();
    }
}
