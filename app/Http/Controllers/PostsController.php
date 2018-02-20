<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

    	return view('posts.index', compact('posts') );
    }


    public function show($post)
    {

        $post = Post::find($post);

    	return view('posts.show', compact('post') );
    }


    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {

        $this->validate(request(), array(
            'post_title' => 'required',
            'post_body' =>  'required'
        ));

    	Post::create(array(
            'title' => request( 'post_title'),
            'content' => request( 'post_body')
        ));

    	return redirect('/');
        
    }
}
