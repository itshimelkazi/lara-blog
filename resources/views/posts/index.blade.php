@extends('layouts.master')


@section('content')


	<pre>
		{{-- {{print_r($posts)}} --}}
	</pre>

	@if($posts)

		@foreach( $posts as $post )

			<div class="blog-post">
				<h2 class="blog-post-title"><a href="/posts/{{$post->id}}"> {{$post->title}} </a></h2>
				<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} By <a href="#">Chris</a></p>
				<div>
					<p>
						{{$post->content}}
					</p>
				</div>
			</div><!-- /.blog-post -->
		@endforeach

	@endif

	<nav class="blog-pagination">
		<a class="btn btn-outline-primary" href="#">Older</a>
		<a class="btn btn-outline-secondary disabled" href="#">Newer</a>
	</nav>


@endsection