<?php 

use Illuminate\Database\Seeder;

class TownSeeder extends Seeder {
	public function run() {
		$faker = Faker::create();
		$count = 15;

		for ($i=0; $i<$count; $i++) {
			Town::create([
				'town' 		=> $faker->city,	
			]);
		}
	}
}