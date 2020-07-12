<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        $dulieu = Faker\Factory::create();
        for($i=0;$i<10;$i++){
        	User::create([
        		'name' => $dulieu->name(),
        		'email' => $dulieu->email(),
        		'pass' => bcrypt('matkhau')
        	]);
        }
    }
}
