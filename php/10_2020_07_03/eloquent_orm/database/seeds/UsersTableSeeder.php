<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\UserOne;
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
	        // DB::table('users')->insert([
	        // 	'name' => $faker->name(10),
	        // 	'email' => $faker->email(),
	        // 	'password' => hash::make('123456')
	        // ]);
           $user = UserOne::create(
            [
                'name' => $faker->name(10),
                'email' => $faker->email(),
                'password' => hash::make('123456')
            ]
           );
           $user->save();
    	}
    }
}
