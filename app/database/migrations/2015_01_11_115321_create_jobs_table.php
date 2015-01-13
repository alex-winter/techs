<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
			$table->integer('branch_id')->unsigned();
			$table->integer('booked_by')->unsigned();
			$table->integer('completed_by')->unsigned();
			$table->integer('device_id')->unsigned();
			$table->integer('priority');
			$table->integer('status');
			$table->integer('satisfaction_level');
			$table->integer('parts_required');
			$table->integer('upsells');
			$table->boolean('tracked');
			$table->text('problem', 500);
			$table->text('reason_failure', 500);
			$table->string('job_number');
			$table->string('accessory1');
			$table->string('accessory2');
			$table->string('accessory3');
			$table->string('accessory4');
			$table->string('accessory5');
			$table->string('accessory6');
			$table->float('final_cost');
			$table->float('parts_cost');
			$table->float('upsell_cost');
			$table->timestamp('time_started');
			$table->timestamp('time_completed');
			$table->timestamp('time_out');
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
		Schema::drop('jobs');
	}

}
