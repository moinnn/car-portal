<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$array =[
                'name_en' => $faker->word,
                'name_ar' => $faker->word
			];
             DB::table('tags')->insert($array);
		}
	}

}