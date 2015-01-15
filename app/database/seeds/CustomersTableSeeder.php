<?php

class CustomersTableSeeder extends Seeder {
	public function run() {
		DB::table('customers')->delete();

		$customers = array(
			array(
				
			)
		);

		DB::table('customers')->insert($customers);
	}
}