<?php 

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DistrictSeeder extends Seeder {
	public function run() {
		$faker = Faker::create();
		$count = 55;
		$ids = Town::lists('town_id');

		for ($i=0; $i<$count; $i++) {
			District::create([
				'district' 	=> 'district #'.$faker->numberBetween(1, 10),
				'town_id' 	=> $faker->randomElement($ids),		
			]);
		}
	}
}