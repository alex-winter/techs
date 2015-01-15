<?php

class MessagesTableSeeder extends Seeder {
	public function run() {
		DB::table('messages')->delete();

		$messages = array(
			array(
				
			)
		);

		DB::table('messages')->insert($messages);
	}
}