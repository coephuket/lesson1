<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
    public function index() {
        $num1="0";
        $num2="0";
        $result="0";
        return view('validate.cal',
                compact('num1','num2','result'));
    }

    public function submit(Request $request) {
    	$num1 = $request->input('num1');
    	$num2 = $request->input('num2');
    	$result = $num1 + $num2;
    	return view('validate.cal',
    			compact('num1','num2','result'));
    }
}
