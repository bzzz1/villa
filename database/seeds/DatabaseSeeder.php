<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		// $this->call('UserTableSeeder');


		User::create(['name'=>'admin', 'password'=>'$2y$10$wQR3pm2Nqmjmic88IYo0.eVsFRg9d06.yy3s7CxoUaJaSe/uwDACa']);
	}
}