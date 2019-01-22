<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mr. Admin',
            'role_id' => 1,
            'about' => 'admin test ',
            'email' => 'admin@admission.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Mr. Author',
            'role_id' => 2,
            'about' => 'author test',
            'email' => 'author@admission.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
