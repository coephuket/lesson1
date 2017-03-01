@extends('validate/template')

@section('title','Calculator')

@section('content')
	<form action="/cal" method="post">
		<label for="num1">Num:1</label>
		<input type="text" name="num1"> + <br>
		<label for="num2">Num:2</label>
		<input type="text" name="num2"><br>
		<label for="Result">Result:</label>
		<input type="text" name="result">
		{{csrf_field()}}
		<button type="submit">Submit</button>
		<br>
	</form>

@endsection