<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EstateSeeder extends Seeder {
	public function run() {
		$faker = Faker::create();
		$count = 35;
		$ids = District::lists('district_id');


		for ($i=0; $i<$count; $i++) {
			Estate::create([
				'title' 		=> $faker->secondaryAddress,		
				'description' 	=> $faker->paragraph(3),		
				'house_area' 	=> $faker->,		
				'yard_area' 	=> $faker->,		
				'rooms' 		=> $faker->,		
				'commercial' 	=> $faker->,		
				'sea_dist' 		=> $faker->,		
				'type' 			=> $faker->randomElement(['']),		
				'period' 		=> $faker->randomElement(['посуточно', 'почасово', 'помесячно']),		
				'price' 		=> $faker->,		
				'address' 		=> $faker->address,		
				'longitude' 	=> $faker->longitude,		
				'latitude' 		=> $faker->latitude,		
				'district_id' 	=> $faker->randomElement($ids),		
			]);
		}
	}
}