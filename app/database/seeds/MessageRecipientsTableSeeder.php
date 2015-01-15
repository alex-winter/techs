<?php

class MessageRecipientsTableSeeder extends Seeder {
	public function run() {
		DB::table('message_recipients')->delete();

		$message_recipients = array(
			array(
				
			)
		);

		DB::table('message_recipients')->insert($message_recipients);
	}
}