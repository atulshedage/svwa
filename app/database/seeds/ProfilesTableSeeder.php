<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use dvwa\users\Profile;
class ProfilesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$user = \dvwa\users\User::lists('id');
		foreach(range(1, 10) as $index)
		{
			Profile::create([
				'first_name' => $faker->word,
				'last_name' => $faker->word,
				'user_id' => $faker->randomElement($user)
			]);
		}
	}

}