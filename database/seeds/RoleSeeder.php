<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_role')->insert([
            'name' => 'Admin'
        ]);

        DB::table('user_role')->insert([
            'name' => 'User'
        ]);

        DB::table('user_role')->insert([
            'name' => 'Guest'
        ]);
    }
}
