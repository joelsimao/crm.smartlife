<?php

use App\Manager;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment(['production', 'development'])){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\managers.csv';
        } else {
            $file = storage_path('app/csv/managers.csv');
        }

        $managers=csvToArray($file);
        foreach ($managers as $manager){
            Manager::create($manager);
        }
    }
}
