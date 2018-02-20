@extends('layouts.master')


@section('content')

	<h1>Create Post</h1>

	<hr>

	<form method="POST" action="/posts">

		{{csrf_field()}}

		<div class="form-group">
			<label for="post_title">Post Title</label>
			<input type="text" name="post_title" class="form-control" id="post_title" >
		</div>

		<div class="form-group">
			<label for="post_body">Post Body</label>
			<textarea name="post_body" id="post_body" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Publish</button>
		</div>
		
		@if( count($errors)  )
 
			<ul class="alert alert-danger">
				
				@foreach($errors->all() as $error )
					<li>{{$error}}</li>
				@endforeach
			</ul>
			 

		@endif


	</form>

@endsection