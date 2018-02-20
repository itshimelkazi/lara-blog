@extends('layouts.master')


@section('content')

	@if($post)
		<div class="blog-post">
			<h1 class="blog-post-title">{{$post->title}}</h1>
			<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} By <a href="#">Chris</a></p>
			<div>
				<p>
					{{$post->content}}
				</p>
			</div>

			@if( count( $post->comments ))

				<hr>

				<ul class="comments">

					@foreach($post->comments as $comment)

						<li><strong>{{$comment->created_at->diffForHumans()}}:</strong> {{$comment->comment}}</li>

					@endforeach

				</ul>

			@endif


			<div class="jumbotron">
				<h3>Create a new Comment</h3>
				<form method="POST" action="/posts/{{$post->id}}/comments">
					{{csrf_field()}}
		
					<div class="form-group">
						<textarea name="comment_body" placeholder="Your Comment" id="comment_body" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Comment</button>
					</div>

	    			@include('layouts.error')
				</form>
				
			</div>
		</div><!-- /.blog-post --> 
	@endif

@endsection