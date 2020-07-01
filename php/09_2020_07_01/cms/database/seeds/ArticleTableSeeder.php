<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ArticleTableSeeder extends Seeder
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
        for($i=0; $i<10;$i++){

        DB::table('article')->insert([
        	'title' => $faker->bs,
        	'description' => $faker->text(100),
        	'content' => $faker->text(300)
        ]);    
        }

    }
}
