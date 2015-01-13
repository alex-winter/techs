<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToActions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('actions', function(Blueprint $table)
		{
			$table->foreign('job_id')->references('id')->on('jobs');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('branch_id')->references('id')->on('branches');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('actions', function(Blueprint $table)
		{
			$table->dropForeign('actions_job_id_foreign');
			$table->dropForeign('actions_user_id_foreign');
			$table->dropForeign('actions_branch_id_foreign');
		});
	}

}
