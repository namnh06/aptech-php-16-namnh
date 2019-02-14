<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();
        User::create([
            'name' => $faker->name,
            'email' => $faker->safeEmail(),
            'password' => bcrypt(123)
        ]);
        User::create([
            'name' => $faker->name,
            'email' => $faker->safeEmail(),
            'password' => 123
        ]);
    }
}