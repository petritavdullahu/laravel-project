<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];
    
    public function getTitle()
    {
    	return $this->title;
    }

    public function user()
	{
		return $this->belongsTo('App\User');
	}

    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id');
    }
}
