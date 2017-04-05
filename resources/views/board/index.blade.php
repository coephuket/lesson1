@extends('template')
@section('title','My Board')

@section('content')	
	@foreach($boards as $index => $item)
		{{$index+1}}: {{$item->title}} : {{$item->body}} <br>
		<a href="/boards/{{$item->id}}">Show</a> |
		<a href="/boards/{{$item->id}}/edit">Edit</a> <br>
		<form action="/boards/{{$item->id}}" method="post">
			<input type="hidden" name="_method" value="DELETE" />
			{{csrf_field()}}
			<button>Delete</button>
		</form>
		<br>
	@endforeach
	
	<hr>
	<br>
	<a href="/boards/create"> Create New Message </a>

@endsection