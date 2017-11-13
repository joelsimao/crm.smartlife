<?php

use Illuminate\Database\Seeder;
use App\Job;
class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment('production')){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\jobs.csv';
        } else {
            $file = storage_path('app/csv/jobs.csv');
        }

        $jobs=csvToArray($file);
        foreach ($jobs as $job){
            Job::create($job);
        }
    }
}
