<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerCategories extends Model
{
    /**
     * The users that belong to the category.
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_volunteer_categories', 'user_id', 'category_id');
    }
}
