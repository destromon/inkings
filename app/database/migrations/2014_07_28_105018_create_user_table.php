<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_email', '100');
			$table->unique('user_email');
			$table->string('user_password', '100');
			$table->string('user_first', '30');
			$table->string('user_last', '30');
			$table->string('user_middle', '30')->nullable;
			$table->string('user_access', '50');
			$table->boolean('active')->default(1);
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
		Schema::drop('user', function(Blueprint $table)
		{
			//
		});
	}

}
