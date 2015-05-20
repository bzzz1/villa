<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prices', function($table)
		{
		    $table->bigIncrements('price_id');
		    $table->integer('stock_id')->unsigned()->index();
		    // $table->foreign('stock_id')->references('stock_id')->on('stocks');
		    $table->bigInteger('volume');
		    $table->decimal('price', 10, 2);
		    $table->decimal('high', 10, 2);
		    $table->decimal('low', 10, 2);
		    $table->decimal('delta', 10, 2);
			$table->timestamp('date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prices');
	}

}
