<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToJobs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jobs', function(Blueprint $table)
		{
			$table->foreign('customer_id')->references('id')->on('customers');
			$table->foreign('branch_id')->references('id')->on('branches');
			$table->foreign('booked_by')->references('id')->on('users');
			$table->foreign('completed_by')->references('id')->on('users');
			$table->foreign('device_id')->references('id')->on('devices');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('jobs', function(Blueprint $table)
		{
			$table->dropForeign('jobs_customer_id_foreign');
			$table->dropForeign('jobs_branch_id_foreign');
			$table->dropForeign('jobs_booked_by_foreign');
			$table->dropForeign('jobs_completed_by_foreign');
			$table->dropForeign('jobs_device_id_foreign');
		});
	}

}
