<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function getText(Request $request){
		$mytext = $request->input('mytext');
		$mytext2 = $request->input('mytext2');
		$response = "";
		if ( $mytext == "hello")
			$response = "Good bye!<br/>";
		else
			$response = "<h1>Yeah!</h1>";
		for( $i=0;$i<$mytext2;$i++)
				echo $i.": ".$response;	
	}

	function getIndex() {
		return view('hello');
	}
}
