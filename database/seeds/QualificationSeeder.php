<?php

use App\Qualification;
use Illuminate\Database\Seeder;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment(['production', 'development'])){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\qualifications.csv';
        } else {
            $file = storage_path('app/csv/qualifications.csv');
        }

        $qualifications=csvToArray($file);
        foreach ($qualifications as $qualification){
            Qualification::create($qualification);
        }
    }
}
