<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;

class Calculator extends Controller
{
    public function index() {
        return view('validate.cal');
    }

    public function submit(Request $request) {

        $rules = [
            'num1' => 'required|numeric',
            'num2' => 'required|numeric'
        ];

        $messages = [
            'num1.required' => 'กรุณาป้อนค่า number 1',
            'num2.required' => 'กรุณาป้อนค่า number 2',
            'num1.numeric' => 'กรุณาป้อนค่า number 1 เป็นตัวเลข',
            'num2.numeric' => 'กรุณาป้อนค่า number 2 เป็นตัวเลข'
        ];

        $validator = Validator::make($request->all(),$rules, $messages);        
        if ($validator->passes() ){
        	$num1 = $request->input('num1');
        	$num2 = $request->input('num2');        
            $result = $num1 + $num2;
            return view('validate.cal',
              compact('num1','num2','result'));
        }
        else{
            return Redirect::to('/cal')
                ->withErrors($validator->messages());
//              ->with('errors',$validator->messages());
        }


    }
}
