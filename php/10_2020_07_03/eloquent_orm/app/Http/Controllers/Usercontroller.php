<?php

namespace App\Http\Controllers;
use App\UserOne;
use Illuminate\Http\Request;
class Usercontroller extends Controller
{
    //
    public function show(){
    	$table = new userOne::All()->ToArray();
    	return view('show',['user' => $table]);
    }
}
