<?php

use App\Supervisor;
use Illuminate\Database\Seeder;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment(['production', 'development'])){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\supervisors.csv';
        } else {
            $file = storage_path('app/csv/supervisors.csv');
        }

        $supervisors=csvToArray($file);
        foreach ($supervisors as $supervisor){
            Supervisor::create($supervisor);
        }
    }
}
