@extends('template')
@section('title','My Board')

@section('content')	
	@foreach($boards as $index => $item)
		<h4>{{$index+1}}: {{$item->title}} </h4>
		<p>{{$item->body}} </p>

		<form action="/boards/{{$item->id}}" method="post" class="form-inline">
			<a href="/boards/{{$item->id}}" class="btn btn-info">Show</a> 
			<a href="/boards/{{$item->id}}/edit" class="btn btn-default">Edit</a> 
			<input type="hidden" name="_method" value="DELETE" />
			{{csrf_field()}}
			<button class="btn btn-primary">Delete</button>
		</form>
		<br>
	@endforeach
	
	<hr>
	<br>
	<a href="/boards/create"> Create New Message </a>

@endsection