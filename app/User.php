<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'contact', 'volunteer_details'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function visits()
    {
        return $this->belongsToMany('App\Visit');
    }

    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }

    public function volunteer_categories()
    {
        return $this->belongsToMany('App\VolunteerCategories', 'user_volunteer_categories', 'user_id', 'category_id');
    }
}
