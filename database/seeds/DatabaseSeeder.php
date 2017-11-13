<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             MaritalStatusSeeder::class,
             RolePermissionSeeder::class,
             JobSeeder::class,
             AgencySeeder::class,
             SupervisorSeeder::class,
             OperatorSeeder::class,
             //UsersTableSeeder::class
         ]);
    }
}
