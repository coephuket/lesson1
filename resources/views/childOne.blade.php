@extends('layouts.app')

@section('title','This is child 1')

@section('sidebar')
	Welcome to my application
@endsection

@section('content')
  <p>This is Child One content </p>
	 
	@if (count($records) === 1)
	    I have one record!

	@elseif (count($records) > 1)
	    I have multiple records!
	@else
	    I don't have any records!
	    <br> yeah yeah
	@endif

	@for ($i = 0; $i < 5 ; $i++)
    	 <p>record: {{ $records[$i] }}</p>
	@endfor


	@foreach ($records as $record)
	    <p>record: {{ $record }}</p>
	@endforeach


@endsection