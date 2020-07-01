<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
    	$articles = DB::table('article')->select('id','title','description','content')->get();
    	return view('show',['name' =>$articles]);
    }


}
