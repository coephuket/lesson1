<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{

	public function index() {
		session(['cakePrice' => '49.95']);
		//var_dump( session('cakePrice') );
		return view('cart.index');
	}


    public function order() {


    }
}
