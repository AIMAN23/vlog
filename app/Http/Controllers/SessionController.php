<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSession(Request $request){
        if ($request->session()->has('name')){
            echo $request->session()->get('name');
        }else{
            echo 'Session Not found';
        }
    }
    public function setSession(Request $request){
        $request->session()->put('name','OsaMa');
        return redirect(route('session.ok'))->with('msg','Session Created');
        //echo 'Session Created';
    }
    public function deleteSession(Request $request){
        $request->session()->forget('name');
        echo 'Session Deeleted';
    }
    public function flashSession(){
        return view('alert');
    }

}
