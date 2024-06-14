<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class musikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1;$i<100;$i++)
        {
        DB::table('musik_559')->insert([
            'title' => $faker->sentence(),
            'artist' => $faker->word(),
            'genre' => $faker->word(),
            'album' => $faker->word(),
            'duration' => $faker->time(),
            'year' => $faker->year(),
            'listener' => $faker->randomNumber()
        ]);
        }
}
}
