<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
   public function showLogin(){
       return view('login');
   }
    public function login(Request $request){
        $username = 'Osama';
        $passsword = '123';

        if ($username == $request->input('username') && $passsword == $request->input('password')){
            return redirect()->action('RedirectController@ifLoginok');
        }
        return redirect()->back();
        //
    }
    public function ifLoginok(){
        // view with ok
        return view('ok');
    }
}
