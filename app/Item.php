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
        'quantity'
    ];

    /**
     * Get the purchases for the item.
     */
    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }

    public static function purchased_count()
    {
        return Item::all()->sum('quantity') - Item::needed_count();
    }

    public static function needed_count()
    {
        return Item::all()->sum(function($item) {
            return $item->needed();
        });
    }

    public function needed() {
        return $this->quantity - $this->purchased();
    }

    public function purchased() {
        return $this->purchases()->sum('quantity');
    }


}
