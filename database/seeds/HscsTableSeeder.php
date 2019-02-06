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
        DB::table('hscs')->insert([
            [
                'ssc_id' => 1,
                'roll' => 131313,
                'reg' => 313131,
                'board' => 'Rajshahi',
                'institute' => '',
                'session' => '2011-12',
                'group' => 'Science',
                'type' => 1,//1=regular 2=irr
                'passing_year' => 2012,
                'result' => 4.6
            ],

        ]);
    }
}
