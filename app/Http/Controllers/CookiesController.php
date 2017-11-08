<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookiesController extends Controller
{
    public function setCookie(){
        Cookie::queue(Cookie::make('language','arabic',3600));
        echo 'Cookies Set';
    }
    public function getCookie(){
        if (Cookie::has('language')){
            $value = Cookie::get('language');
            echo $value;
        }
    }
}
