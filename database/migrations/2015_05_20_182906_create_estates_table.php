<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estates', function(Blueprint $table)
		{
			$table->increments('estate_id');
			$table->string('title', 64);
			$table->string('description', 512);
			$table->integer('house_area')->nullable();
			$table->integer('yard_area')->nullable();
			$table->integer('rooms')->nullable();
			$table->boolean('commercial');
			$table->string('type', 32);
			$table->integer('period')->nullable;
			$table->integer('price');
			$table->string('address', 256);
			$table->integer('district_id')->unsigned()->index();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estates');
	}

}
