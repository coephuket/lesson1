@extends('template')
@section('title','My Board')

@section('content')

	@foreach($boards as $item)
		{{$item->title}} : {{$item->body}} <br>
	@endforeach
	
	<hr>
	<br>
	<a href="/boards/create"> Create New Message </a>

@endsection