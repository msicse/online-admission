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
            'ssc_id' => 1,
            'roll' => 121234,
            'reg' => 56789065,
            'board' => 'Rajshahi',
            'session' => 2010-11,
            'group' => 'Science',
            'type' => 1,//1=regular 2=irr
            'passing_year' => 2018,
            'result' => 4.6

        ]);
    }
}
