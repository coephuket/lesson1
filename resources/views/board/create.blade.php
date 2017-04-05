@extends('template')
@section('title','My Board')

@section('content')

<form action="/boards" method="POST" role="form">
	<legend>Create new post</legend>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea class="form-control" name="body" rows="4"></textarea>
	</div>
	{{csrf_field()}}
	<button type="submit" class="btn btn-primary">Submit</button>

</form>

 <a href="/boards"> Home </a>
@endsection