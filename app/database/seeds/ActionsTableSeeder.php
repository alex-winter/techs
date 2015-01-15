<?php

class ActionsTableSeeder extends Seeder {
	public function run() {
		DB::table('actions')->delete();

		$actions = array(
			array(
				
			)
		);

		DB::table('actions')->insert($actions);
	}
}