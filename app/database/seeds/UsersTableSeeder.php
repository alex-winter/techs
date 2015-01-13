<?php

class UsersTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		$users = array(
			array(
				'username' => 'Alex',
				'password' => Hash::make('letmein'),
				'email' => 'ajw_123@hotmail.co.uk'
			)
		);

		DB::table('users')->insert($users);
	}
}