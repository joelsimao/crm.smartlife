<?php

use App\Operator;
use Illuminate\Database\Seeder;

class OperatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment(['production', 'development'])){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\operators.csv';
        } else {
            $file = storage_path('app/csv/operators.csv');
        }

        $operators=csvToArray($file);
        foreach ($operators as $operator){
            Operator::create($operator);
        }
    }
}
