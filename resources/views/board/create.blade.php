@extends('template')
@section('title','My Board')

@section('content')

<form action="/boards" method="POST" role="form">
	<legend>Create new post</legend>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title">
	</div>

	@foreach($tags as $tag)
		<label class="checkbox-inline">			
			<input type="checkbox" name="tags[]" value="{{$tag->id}}"> {{$tag->name}} &nbsp;
		</label>
	@endforeach

	<div class="form-group">
		<label for="body">Body</label>
		<textarea class="form-control" name="body" rows="4"></textarea>
	</div>
	{{csrf_field()}}

	<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
	<input type="hidden" name="ip" value="{{Request::getClientIp()}}">
	<button type="submit" class="btn btn-primary">Submit</button>

</form>

 <a href="/boards"> Home </a>
@endsection