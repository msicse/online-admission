<?php

use Illuminate\Database\Seeder;

class ProgramesTableSeeder extends Seeder
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
                'department_id' => 2,
                'name' => 'Computer Science Enginieering',
                'short_name' => 'CSE',
                'slug' => 'cse',
                'seat' => 50,
                'level' => 1,
                'status' => 1,
            ],
            [
                'department_id' => 2,
                'name' => 'Civil Enginieering',
                'short_name' => 'CE',
                'slug' => 'ce',
                'seat' => 50,
                'level' => 1,
                'status' => 1,
            ],
            [
                'department_id' => 2,
                'name' => 'Electrical and Electronic  Enginieering',
                'short_name' => 'EEE',
                'slug' => 'eee',
                'seat' => 50,
                'level' => 1,
                'status' => 1,
            ],
            [
                'department_id' => 2,
                'name' => 'Mecanical and Industrial Production Enginieering',
                'short_name' => 'MIPE',
                'slug' => 'mipe',
                'seat' => 50,
                'level' => 1,
                'status' => 1,
            ],
            [
                'department_id' => 2,
                'name' => 'Textile Enginieering',
                'short_name' => 'TE',
                'slug' => 'te',
                'seat' => 50,
                'level' => 1,
                'status' => 1,
            ]
        ]);
    }
}
