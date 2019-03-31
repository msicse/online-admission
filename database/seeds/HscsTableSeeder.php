<?php

use Illuminate\Database\Seeder;

class HscsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5 ; $i++) {
            for ($j=0; $j < 3; $j++) {
                DB::table('application_programe')->insert([
                    [
                        'application_id'    => rand(1,50),
                        'programe_id'    => rand(1,5),
                    ],

                ]);
            }
        }

    }
}
