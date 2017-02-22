<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;

class CartController extends Controller
{

	public function index() {
		session(['cakePrice' => '49.95']); 
		session()->put('foo','foobar');		

		$cookie = cookie('cupsPrice','5',3600);
		Cookie::queue($cookie);
		// Cookie::queue(Cookie::forget('cupsPrice'));		

		return view('cart.index')->withCookie($cookie);
	}


    public function order(Request $request) {
    	echo session('cakePrice')."<br/>";
    	echo $request->cookie('cupsPrice')."<br/>";
    	echo $request->input('beerPrice');
    }
}
