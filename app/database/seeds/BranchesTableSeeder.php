<?php

class BranchesTableSeeder extends Seeder {
	public function run() {
		DB::table('branches')->delete();

		$branches = array(
			array(
				
			)
		);

		DB::table('branches')->insert($branches);
	}
}