@extends('template')
@section('title','My Board')

@section('content')	
	@foreach($boards as $index => $item)
		<h4>{{ $NUM_PAGE*($page-1) + $index+1 }}: {{$item->title}} </h4>
		<p>{{$item->body}} </p>

		Last updated: {{$item->updated_at}} <br>

		<div class="pull-right">
			<strong>From: </strong>
			{{$item->user()->get()[0]['name']}} :: {{ $item->ip}}
		</div>		

		@can('show',$item)
			<form action="/boards/{{$item->id}}" method="post" class="form-inline">
				<a href="/boards/{{$item->id}}" class="btn btn-info btn-sm">Show</a> 
				<a href="/boards/{{$item->id}}/edit" class="btn btn-default btn-sm">Edit</a> 
				<input type="hidden" name="_method" value="DELETE" />
				{{csrf_field()}}
				<button class="btn btn-primary btn-sm">Delete</button>
			</form>
			<br>
		@endcan

	@endforeach
	
	{{ $boards->links() }}  <br>

	<hr>
	<br>
	<a href="/boards/create"> Create New Message </a>

@endsection