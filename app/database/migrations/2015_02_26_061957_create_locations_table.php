<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('locations', function($table)
		{
			$table->increments('id');
			$table->string('place');
			$table->string('description');
			$table->string('imgUrl');
			$table->string('url');
			$table->string('googleMap');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('locations');
	}

}
