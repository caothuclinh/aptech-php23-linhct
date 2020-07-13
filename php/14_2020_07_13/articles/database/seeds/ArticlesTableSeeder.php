<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Article;
class ArticlesTableSeeder extends Seeder
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
            $title = $faker->sentence(rand(4,6), true);
        	Article::create([
        		'title' => $title,
                'slug' => Str::slug($title, '-'),
        		'description' => $faker->text(rand(100,200)),
        		'content' => $faker->text(rand(1000,2500))
        	]);
        }
    }
}
