<?php 

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder {
	public function run() {
		$faker = Faker::create();
		$count = 15;

		for ($i=0; $i<$count; $i++) {
			Article::create([
				'title' 	=> $faker->sentence(),
				'body' 		=> $faker->paragraph(40),
				'added_on' 	=> $faker->dateTimeThisMonth(),
			]);
		}
	}
}