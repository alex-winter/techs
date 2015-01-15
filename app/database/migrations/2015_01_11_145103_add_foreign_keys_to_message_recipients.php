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
			$table->foreign('send_to')->references('id')->on('users');
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
			$table->dropForeign('message_recipients__foreign');
		});
	}

}
