<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {	
    return view('welcome');
});

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


	//return view('greet', ['name' => 'James']);

	// $request->session()->put('key1', 'value1');
	// echo $request->session()->get('key1');

	// session(['key2' => 'value2']);
	// echo session('key2');


