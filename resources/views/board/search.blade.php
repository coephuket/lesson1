@extends('template')
@section('title','My Board')

@section('content')	

	Found {{$count}} records <br><br>

	@foreach($boards as $index => $item)
		<h4>{{$index+1 }}: {{$item->title}} </h4>
		<p>{{$item->body}} </p>

		<b>Tags</b>
		@foreach($item->tags as $ctag)
			<span class="label label-info">
				<a href="/boards/searchTag/{{$ctag->id}}" style="color:white">{{$ctag->name}}</a> 
			</span> &nbsp; 
		@endforeach
		<br><br>

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
	 

	<hr>
	<br>
	@if ( !Auth::guest() )
		<a href="/boards/create"> Create New Message </a>
	@endif

@endsection