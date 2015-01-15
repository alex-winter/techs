<?php

class ManufacturersTableSeeder extends Seeder {
	public function run() {
		DB::table('manufacturers')->delete();

		$manufacturers = array(
			array(
				
			)
		);

		DB::table('manufacturers')->insert($manufacturers);
	}
}