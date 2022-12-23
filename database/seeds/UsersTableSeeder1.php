<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        / DB::table('users')->insert([
            'lastname' => 'narija1',
            'firstname' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
