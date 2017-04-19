@extends('template')
@section('title','My Board')

@section('content')

<form action="/boards/{{$id}}" method="POST" role="form">
	<legend>Create new post</legend>
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" 
				name="title" value="{{$board->title}}">
	</div>

	@foreach( $tags as $tag) 
		<!-- {{ $chk = '' }} -->
		@foreach($board->tags as $ctag)
			@if ( $tag->id == $ctag->id)
				<!-- {{ $chk = 'checked' }} -->
			@endif
		@endforeach
		<input type="checkbox" name="tags[]" value="{{$tag->id}}" {{$chk}}> {{$tag->name}} &nbsp;
	@endforeach


	<div class="form-group">
		<label for="body">Body</label>
		<textarea class="form-control" name="body" rows="4">{{$board->body}}</textarea>
	</div>
 
	<strong>From: </strong>
	{{$board->user()->get()[0]['name']}} 

	<br><br>

	<input type="hidden" name="_method" value="PUT" />
	{{csrf_field()}}
	<button type="submit" class="btn btn-primary">Submit</button>

</form>

 <a href="/boards"> Home </a>
@endsection