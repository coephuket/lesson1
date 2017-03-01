<?php
 
use Illuminate\Http\Request;

Route::get('/', function () { return view('welcome');   });

Route::get('/cart/index','CartController@index');
Route::post('/cart/orderProduct','CartController@order');
  
Route::get('/greet', function(Request $request) {
	$name = 'John';	
	return view('example.greet')
			->with('name', 'Victoria')	
			->with('surname', 'Secret');	
});

Route::get('blade', function () {
    return view('child');
});

Route::get('childOne', function () {
	$records = [1,2,3,4,5];
    return view('childOne')->with('records',$records);
});

Route::get('/hello', 'HelloController@getIndex');
Route::get('/getText','HelloController@getText');
Route::post('/getText','HelloController@getText');

Route::get('/cal', 'Calculator@index');
Route::post('/cal', 'Calculator@submit');
Route::post('/val', 'Calculator@val');
 

