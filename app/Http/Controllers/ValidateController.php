<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public function index(){
        return view('register');
    }
    public function save(Request $request){
        $messages = [
            'username.required'=>'Ohhhhhhhh you forget this'
        ];
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required|min:6',
            'email'=>'required|email'
        ],$messages);
        return $request->all();
    }
}
