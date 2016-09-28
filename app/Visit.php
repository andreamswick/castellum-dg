<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visit extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'start', 'end', 'name',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start',
        'end',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * A visit can have many comments.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * Load a threaded set of comments for the post.
     *
     * @return App\CommentsCollection
     */
    public function getThreadedComments()
    {
        return $this->comments()->with('owner')->get()->threaded();
    }

    public function setStartAttribute($value)
    {
        $this->attributes['start'] = date('Y-m-d H:i:s', strtotime($value));
    }

    public function setEndAttribute($value)
    {
        $this->attributes['end'] = date('Y-m-d H:i:s', strtotime($value));
    }

}
