<?php
use Carbon\Carbon;
use App\Modles\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Post::truncate(); 

    	foreach(range(1,21) as $number){

    		$faker = Factory::create('zh_TW');



     		Post::create([
     			'title' => $faker->freeEmail ,
     			'content' => $faker->Email,
     			'is_feature' => rand(0,1),
     			'page_view' => rand(1,500),
     			'created_at' => Carbon::now()->subDays(rand(5,10)),
     			'updated_at' => Carbon::now()->subDays(rand(5,10)),
     			]);
    	}
    	

    }
}
