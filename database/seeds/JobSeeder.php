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
        $jobs=csvToArray('storage/csv/jobs.csv');
        foreach ($jobs as $job){
            Job::create($job);
        }
    }
}
