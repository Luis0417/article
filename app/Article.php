<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // table name to be used
    protected $table = 'articles';

    // columns to be allowed in mass-assingment 
    protected $fillable = ['user_id', 'title', 'body'];

    /* Relations */

    // One to many inverse relationship with User model
    public function owner() {
    	return $this->belongsTo('App\User', 'user_id');
    }

    // One to Many relationship with Comment model
    public function comments()
    {
    	return $this->hasMany('App\Comment', 'article_id');
    }

    /**
     * get show article route
     *
     * @return string
     */
    public function path()
    {
        return "/articles/{$this->id}";
    }
}
