<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fake = Faker\Factory::create();
        for($i=0;$i<10;$i++){
        	User::create(
        		[
        			'name' => $fake->name(),
        			'email' =>$fake->email(),
        			'pass' => bcrypt('matkhau')
        		]
        	);
        }
    }
}
