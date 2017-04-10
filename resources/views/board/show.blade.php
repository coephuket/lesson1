@extends('template')
@section('title','My Board')

@section('content')	
  <div>
     <h4>{{$board->title}}</h4>
     <p>{{$board->body}}</p>
  </div>

		Last updated: {{$board->updated_at}} 

		<div class="pull-right">
			<strong>From: </strong>
			{{$board->user()->get()[0]['name']}} :: {{ $board->ip}}
		</div>	

  <hr>
  <a href="/boards">Home</a>
@endsection