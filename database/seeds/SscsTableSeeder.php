<?php

use Illuminate\Database\Seeder;

class SscsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Mr. Admin',
                'fname' => 'Mr. Admin',
                'mname' => 'Mr. Admin',
                'dob' => '',//26-06-2018
                'gender' => 1,//1,2,3
                'roll' => 121234,
                'reg' => 56789065,
                'board' => 'Rajshahi',
                'session' => 2010-11,
                'group' => 'Science',
                'type' => 1,//1=regular 2=irr
                'passing_year' => 2018,
                'result' => 4.6
            ],
            [
                'name' => 'Mr. Admin',
                'fname' => 'Mr. Admin',
                'mname' => 'Mr. Admin',
                'dob' => '',//26-06-2018
                'gender' => 1,//1,2,3
                'roll' => 121234,
                'reg' => 56789065,
                'board' => 'Rajshahi',
                'session' => 2010-11,
                'group' => 'Science',
                'type' => 1,//1=regular 2=irr
                'passing_year' => 2018,
                'result' => 4.6
            ],
            [
                'name' => 'Mr.bhbhvhn',
                'fname' => 'Mr. Admin',
                'mname' => 'Mr. Admin',
                'dob' => '',//26-06-2018
                'gender' => 1,//1,2,3
                'roll' => 121234,
                'reg' => 56789065,
                'board' => 'Rajshahi',
                'session' => 2010-11,
                'group' => 'Science',
                'type' => 1,//1=regular 2=irr
                'passing_year' => 2018,
                'result' => 4.6
            ],
        ]);
    }
}
