<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Blog;
class BlogsTableSeeder extends Seeder
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
        	Blog::create(
        		[
					'tieude' => $faker->name(),
        			'mota_ngan' => $faker->text,
        			'noidung' => $faker->words(200,200)
        		]
        	);
        }
    }
}
