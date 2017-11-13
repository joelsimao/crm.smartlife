<?php

use App\Agency;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment(['production', 'development'])){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\agencies.csv';
        } else {
            $file = storage_path('app/csv/agencies.csv');
        }

        $agencies=csvToArray($file);
        foreach ($agencies as $agency){
            Agency::create($agency);
        }
    }
}
