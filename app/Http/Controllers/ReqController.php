<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReqController extends Controller
{
    public function viewRequest(Request $request){
        return $request->url();
    }
    public function showLoginForm(){
        return view('login');
    }
    public function login(Request $request){
        //$username = $request->input('username');
        //$password = $request->input('password');
        $username = $request->username;
        $password = $request->password;
        return $username.'  -  '.$password;
        //return $request->all();
    }
}
