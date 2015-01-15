<?php

class DevicesTableSeeder extends Seeder {
	public function run() {
		DB::table('devices')->delete();

		$devices = array(
			array(
				
			)
		);

		DB::table('devices')->insert($devices);
	}
}