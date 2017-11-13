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
        $file = storage_path('app/csv/jobs.csv');
        $jobs=csvToArray($file);
        foreach ($jobs as $job){
            Job::create($job);
        }
    }
}
