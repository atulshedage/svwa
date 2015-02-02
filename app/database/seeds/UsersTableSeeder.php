<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use dvwa\users\User;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
				'username' => $faker->word . $index,
				'email' => $faker->email,
				'password' => 'secret'
			]);
		}
	}

}