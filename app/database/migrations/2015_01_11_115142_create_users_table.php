<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('branch_id')->unsigned();
		  	$table->string('profile_image');
		  	$table->string('password');
		  	$table->string('email');
		  	$table->string('username');
		  	$table->string('remember_token', 100)->nullable();
		  	$table->integer('auth_level');
		  	$table->integer('status');
		  	$table->integer('jobs_target');
		  	$table->softDeletes();
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
		Schema::drop('users');
	}

}
