<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['user_id', 'quantity'];

    /**
     * Get the item record associated with the purchase.
     */
    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    /**
     * Get the user record associated with the purchase.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
