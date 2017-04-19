<?php
 
use Illuminate\Http\Request;
// ======= final ===============

Route::resource('boards','Boards\\BoardsController');

// ========== before midterm =============

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
 


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/sendmail', function() {
	$user = (object) array('email' => 'te.laravel@gmail.com','name' => 'Warodom');
	Mail::send('emails.welcome',['user' => $user], function($m) use ($user) {
		$m->from('hello@app.com','Your application');
		$m->to($user->email, $user->name)->subject('Test Subject mail');		
	});
	return 'Sendmail successful';
});


Route::get('/boards/searchTag/{id}','Boards\\BoardsController@searchTag');