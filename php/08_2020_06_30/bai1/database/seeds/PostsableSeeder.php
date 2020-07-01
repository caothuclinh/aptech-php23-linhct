<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PostsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post')->insert([
         'name' => Str::random(70),
        'ma so' => Str::random(30),
        'ngay cap' => Str::random(50),
        'noi cap' => Str::random(30)
    ]}
    }
}
