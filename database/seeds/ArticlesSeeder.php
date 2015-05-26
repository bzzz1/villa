<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder {
	public function run() {
		$faker = Faker::create();
		$count = 15;

		for ($i=0; $i<$count; $i++) {
			'title' 	=> $faker->,
			'body' 		=> $faker->,
			'added_on' 	=> $faker->,
		}
	}
}