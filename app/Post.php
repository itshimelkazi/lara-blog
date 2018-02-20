<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

 	public function comments()
 	{
 		return $this->hasMany(Comment::class);
 	}

 	public function addComment($body)
 	{

		Comment::create(array(
    		'comment' => $body,
    		'post_id'=> $this->id
		));
 	}
	
}
