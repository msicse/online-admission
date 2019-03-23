<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'name' => 'Business and Industrial',
                'short_name' => 'BI',
                'slug' => 'bi',
                'status' => 1,
            ],
            [
                'name' => 'Science and Engenirring',
                'short_name' => 'SE',
                'slug' => 'se',
                'status' => 1,
            ],

        ]);
    }
}
