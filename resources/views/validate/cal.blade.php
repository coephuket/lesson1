@extends('validate/template')

@section('title','Calculator')

@section('content')
	@if ( count($errors) > 0 )
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="/cal" method="post">
		<label for="num1">Num:1</label>
		<input type="text" name="num1" value="{{$num1 or ''}}"> + <br>
		<label for="num2">Num:2</label>
		<input type="text" name="num2" value="{{$num2 or ''}}"><br>
		<label for="Result">Result:</label>
		<input type="number" name="result" value="{{$result or ''}}">
		{{csrf_field()}}
		<button type="submit">Submit</button>
		<br>
	</form>

@endsection