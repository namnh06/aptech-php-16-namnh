<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        for ($i = 11; $i < 20; $i++) {
            User::create(
                [
                    'name' => $faker->name,
                    'email' => $faker->safeEmail(),
                    'password' => $faker->password
                ]
            );
        }
    }
}