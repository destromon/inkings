<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtworkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artwork', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('artwork_title', '100');
			$table->string('artwork_tags');
			$table->string('artwork_image');
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
		Schema::drop('artwork', function(Blueprint $table)
		{
			//
		});
	}

}
