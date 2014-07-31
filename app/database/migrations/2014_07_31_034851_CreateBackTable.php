<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('back', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_email', '100');
			$table->string('user_password', '100');
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
		Schema::drop('back', function(Blueprint $table)
		{
			//
		});
	}

}
