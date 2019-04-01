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
        for ($i=1; $i <= 50 ; $i++) {
            for ($j=0; $j < 3; $j++) {
                DB::table('application_programe')->insert([
                    [
                        'application_id'    => $i,
                        'programe_id'    => rand(1,5),
                    ],

                ]);
            }
        }

    }
}
