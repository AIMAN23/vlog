<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return 'Hello Laravel';
    }

    public function show($id,$user){
        return 'Id = '.$id.'  user ='.$user ;
    }
}
