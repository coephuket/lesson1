<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

	public function index() {
		session(['cakePrice' => '49.95']); 
		session()->put('foo','foobar');		
		//var_dump( session('cakePrice') );
		//session()->forget('foo'); //delete foo session		
		session()->pull('foo');		//delete foo session
		// session()->flush();		// delete all sessions
		
		$teams = ["liverpool","manU"];
		session()->push('teams',$teams);

		$fruit = [ 'fruit' => 'apple', 'veggie' => 'carrot' ];
		session()->put('fruit',$fruit);
		session()->put('fruit.kaoy','Banana');
		
		dd( session()->all() );
		return view('cart.index');
	}


    public function order() {


    }
}
