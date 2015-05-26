<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ImageSeeder extends Seeder {
	public function run() {
		$faker = Faker::create();
		$count = 50;
		$ids = Estate::lists('estate_id');

		for ($i=0; $i<$count; $i++) {
			Image::create([
				'image' 		=> $faker->,
				'estate_id' 	=> $faker->randomElement($ids),
				'preview' 		=> $faker->,
			]);
		}
	}
}