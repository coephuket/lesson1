<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculator extends Controller
{
    public function index() {
    	return view('validate.cal');
    }
}
