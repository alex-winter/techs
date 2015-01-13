<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToMessageRecipients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('message_recipients', function(Blueprint $table)
		{
			$table->foreign('message_id')->references('id')->on('messages');
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
		Schema::table('message_recipients', function(Blueprint $table)
		{
			$table->dropForeign('message_recipients_message_id_foreign');
			$table->dropForeign('message_recipients_user_id_foreign');
			$table->dropForeign('message_branch_id_foreign');
		});
	}

}
