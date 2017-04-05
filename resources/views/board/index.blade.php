@extends('template')
@section('title','My Board')

@section('content')	
	@foreach($boards as $index => $item)
		{{$index+1}}: {{$item->title}} : {{$item->body}} <br>
		<a href="/boards/{{$item->id}}">Show</a> |
		<a href="/boards/{{$item->id}}/edit">Edit</a> <br><br>
	@endforeach
	
	<hr>
	<br>
	<a href="/boards/create"> Create New Message </a>

@endsection