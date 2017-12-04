<?php

use App\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment(['production', 'development'])){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\districts.csv';
        } else {
            $file = storage_path('app/csv/districts.csv');
        }

        $districts=csvToArray($file);
        foreach ($districts as $district){
            District::create($district);
        }
    }
}
