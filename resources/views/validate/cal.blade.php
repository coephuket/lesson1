@extends('validate/template')

@section('title','Calculator')

@section('content')
	<form action="/cal" method="post">
		<label for="num1">Num:1</label>
		<input type="number" name="num1" value="{{$num1 or ''}}" required> + <br>
		<label for="num2">Num:2</label>
		<input type="number" name="num2" value="{{$num2 or ''}}" required><br>
		<label for="Result">Result:</label>
		<input type="number" name="result" value="{{$result or ''}}">
		{{csrf_field()}}
		<button type="submit">Submit</button>
		<br>
	</form>

@endsection