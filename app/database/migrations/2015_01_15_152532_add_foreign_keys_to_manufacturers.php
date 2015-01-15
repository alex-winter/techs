<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToManufacturers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('manufacturers', function(Blueprint $table)
		{
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
		Schema::table('manufacturers', function(Blueprint $table)
		{
			$table->dropForeign('manufacturers_branch_id_foreign');
		});
	}

}
