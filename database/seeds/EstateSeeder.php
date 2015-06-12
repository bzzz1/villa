<?php 

use Illuminate\Database\Seeder;

class EstateSeeder extends Seeder {
	public function run() {
		$faker = Faker::create();
		$count = 35;
		$ids = District::lists('district_id');

		for ($i=0; $i<$count; $i++) {
			$commercial = $faker->randomElement(['sale', 'rent']);
			if ('rent'==$commercial) {
				$period = $faker->randomElement(['hourly', 'daily', 'monthly']);
			} else {
				$period = null;
			}

			$type = $faker->randomElement(['flat', 'cottage', 'parcel', 'commercial']);
			if ('parcel'==$type) {
				$house_area = null;
				$rooms = null;
			} else {
				$house_area = $faker->numberBetween(40, 300);
				$rooms = $faker->numberBetween(2, 12);
			}

			if ('flat'==$type) {
				$yard_area = null;
			} else {
				$yard_area = $faker->numberBetween(4, 40);
			}

			Estate::create([
				'title' 		=> $faker->secondaryAddress,		
				'description' 	=> $faker->paragraph(3),		
				'house_area' 	=> $house_area,		
				'yard_area' 	=> $yard_area,		
				'rooms' 		=> $rooms,		
				'commercial' 	=> $commercial,		
				'sea_dist' 		=> min_round($faker->numberBetween(50, 1500), 2, 2),		
				'type' 			=> $type,		
				'period' 		=> $period,		
				'price' 		=> min_round($faker->numberBetween(6000, 365000), 3, 2),		
				'address' 		=> $faker->address,		
				'longitude' 	=> $faker->longitude,		
				'latitude' 		=> $faker->latitude,
				'present'		=> $faker->boolean(80),	
				'district_id' 	=> $faker->randomElement($ids),		
			]);
		}
	}
}