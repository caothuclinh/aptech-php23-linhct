<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;

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
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){
        	User::create(
        		[
        			'name' =>$faker->name(),
        			'email' =>$faker->email(),
        			'pass' =>md5('123456789')
        		]
        	);
        }
    }
}
