<?php

class CompaniesTableSeeder extends Seeder {
	public function run() {
		DB::table('companies')->delete();

		$companies = array(
			array(
				
			)
		);

		DB::table('companies')->insert($companies);
	}
}