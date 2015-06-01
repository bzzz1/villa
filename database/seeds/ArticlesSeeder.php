<?php 

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder {
	public function run() {
		$faker = Faker::create();
		$count = 15;

		$images = read_dir(dir_path('articles'));
		$images = array_values(array_diff($images, ['alien.png']));

		for ($i=0; $i<$count; $i++) {
			Article::create([
				'title' 	=> $faker->sentence(),
				'preview' 	=> $images[$i],
				'body' 		=> $faker->paragraph(40),
				'added_on' 	=> $faker->dateTimeThisMonth(),
			]);
		}
	}
}