<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        foreach (range(1, 10) as $index) {
            App\User::create([
                'name' => $faker->name,
                'email' => $faker->safeEmail(),
                'password' => Hash::make(123)
            ]);
        }
    }
}