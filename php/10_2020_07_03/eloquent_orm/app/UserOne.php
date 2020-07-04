<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class UserOne extends Model
{
    //
    protected $table = "users";
    public function user(){
    	return $this->$table->select('id','name');
    }
}
