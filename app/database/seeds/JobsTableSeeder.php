<?php

class JobsTableSeeder extends Seeder {
	public function run() {
		DB::table('jobs')->delete();

		$jobs = array(
			array(
				
			)
		);

		DB::table('jobs')->insert($jobs);
	}
}