<?php

namespace App\Http\Controllers;
use App\UserOne;
use Illuminate\Http\Request;
class Usercontroller extends Controller
{
    //
    public function show(){
    	$table = userOne::All();
    	return view('show',['user' => $table]);
    }
}
