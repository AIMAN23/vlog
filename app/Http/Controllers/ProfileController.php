<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index($userid){
       $user = User::where('id',$userid)->first();
       return view('comments.profile')->with('user',$user);
   }
}
