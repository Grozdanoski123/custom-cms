<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('users')->insert([
            'name' => $faker->name,
            'email' => 'youremail@gmail.com',
            'password' => Hash::make('temp12345'),
            'username' => $faker->userName,
            'address' => $faker->address,
            'city' => $faker->city,
            'postal_code' => random_int(20,200),
            'avatar' => Str::random(10),
            'about' => $faker->paragraph,
            'role_id' => 1

        ]);
    }
}
