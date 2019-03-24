<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserTableSeeder::class);
        //$this->call(RoleTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(ProgramesTableSeeder::class);

        //$this->call(SscsTableSeeder::class);
        //$this->call(HscsTableSeeder::class);
    }
}
