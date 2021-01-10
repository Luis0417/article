<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    # table name to be used by model
    protected $table = 'comments';

    # columns to be allowed in mass-assingment
    protected $fillable = ['user_id', 'article_id', 'body'];

    /** Relations */

    # One-to-Many inverse relation with User model.
    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    # One-to-Many inverse relation with Article model.
    public function article()
    {
    	return $this->belongsTo('App\Article', 'article_id');
    }
}
