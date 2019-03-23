<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programes')->insert([
            [
                'department_id' => 1,
                'name' => 'Computer Science Engenirring',
                'short_name' => 'CSE',
                'slug' => 'cse',
                'seat' => 50,
                'level' => 1,
                'status' => 1,
            ],
            [
                'department_id' => 1,
                'name' => 'Civil Engenirring',
                'short_name' => 'CE',
                'slug' => 'ce',
                'seat' => 50,
                'level' => 1,
                'status' => 1,
            ],
        ]);
    }
}
