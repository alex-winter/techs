<?php

class UsersTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		$users = array(
			array(
				'branch_id' => 1,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'alex.winter@techbods.co.uk',
				'username' => 'alex',
				'auth_level' => 9,
				'status' => 1,
				'jobs_target' => 10
			),
			array(
				'branch_id' => 1,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'sean@techbods.co.uk',
				'username' => 'sean',
				'auth_level' => 9,
				'status' => 1,
				'jobs_target' => 10
			),
			array(
				'branch_id' => 1,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'kiran@techbods.co.uk',
				'username' => 'kiran',
				'auth_level' => 7,
				'status' => 1,
				'jobs_target' => 8
			),
			array(
				'branch_id' => 1,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'fiona@techbods.co.uk',
				'username' => 'fiona',
				'auth_level' => 3,
				'status' => 1,
				'jobs_target' => 12
			),
			array(
				'branch_id' => 1,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'jason@techbods.co.uk',
				'username' => 'jason',
				'auth_level' => 3,
				'status' => 1,
				'jobs_target' => 18
			),
			array(
				'branch_id' => 1,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'mark@techbods.co.uk',
				'username' => 'mark',
				'auth_level' => 3,
				'status' => 1,
				'jobs_target' => 18
			),
			array(
				'branch_id' => 1,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'nathan@techbods.co.uk',
				'username' => 'nathan',
				'auth_level' => 3,
				'status' => 1,
				'jobs_target' => 18
			),
			array(
				'branch_id' => 2,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'jake@techbods.co.uk',
				'username' => 'Jake',
				'auth_level' => 7,
				'status' => 1,
				'jobs_target' => 14
			),
			array(
				'branch_id' => 2,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'kelly@techbods.co.uk',
				'username' => 'Kelly',
				'auth_level' => 3,
				'status' => 1,
				'jobs_target' => 16
			),
			array(
				'branch_id' => 2,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'mike@techbods.co.uk',
				'username' => 'Mike',
				'auth_level' => 3,
				'status' => 1,
				'jobs_target' => 19
			),
			array(
				'branch_id' => 2,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'keith@techbods.co.uk',
				'username' => 'Keith',
				'auth_level' => 3,
				'status' => 1,
				'jobs_target' => 14
			),
			array(
				'branch_id' => 1,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'oscar@techbods.co.uk',
				'username' => 'Oscar',
				'auth_level' => 3,
				'status' => 0,
				'jobs_target' => 12
			),
			array(
				'branch_id' => 1,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'kate@techbods.co.uk',
				'username' => 'Kate',
				'auth_level' => 3,
				'status' => 0,
				'jobs_target' => 18
			),
			array(
				'branch_id' => 1,
				'profile_image' => 'user.png',
				'password' => Hash::make('letmein'),
				'email' => 'bobby@techbods.co.uk',
				'username' => 'Bobby',
				'auth_level' => 3,
				'status' => 0,
				'jobs_target' => 15
			)
		);

		DB::table('users')->insert($users);
	}
}