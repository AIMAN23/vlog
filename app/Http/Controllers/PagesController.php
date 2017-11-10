<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('layout.main');
    }
    public function about(){
        return view('pages.about');
    }
    public function get($id){
        $name = 'OsaMa';
        return view('pages.get')->with(
            [
                'pageid'=>$id,
                'name'=>$name
            ]

        );
    }
    public function services(){
        return view('sections.services');
    }
    public function contact(){
        return view('sections.contact');
    }
}
