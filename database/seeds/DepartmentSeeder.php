<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment(['production', 'development'])){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\departments.csv';
        } else {
            $file = storage_path('app/csv/departments.csv');
        }

        $departments=csvToArray($file);
        foreach ($departments as $department){
            Department::create($department);
        }
    }
}
