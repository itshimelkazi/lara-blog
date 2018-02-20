<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
	public function store(Post $post)
	{

		$this->validate(request(), [
    		'comment_body' => 'required|min:2'
		]);


		$post->addComment(request( 'comment_body' ));

		return back();

	}
}
