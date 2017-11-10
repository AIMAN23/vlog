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
            'email'=>'required|email',
            'image'=>'nullable|image'

        ],$messages);

        if ($request->hasFile('image')){
            $fileObject  = $request->file('image');
            $extension = $fileObject->getClientOriginalExtension();
            $mimeType = $fileObject->getClientMimeType();
            $fileName = $fileObject->getClientOriginalName();
            $size = $fileObject->getClientSize();

            $path = $fileObject->storeAs('avatar',time().'.'.$extension);
        }
        return $path;
    }
}
