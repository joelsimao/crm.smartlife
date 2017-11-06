<?php

use Illuminate\Database\Seeder;
use App\MaritalStatus;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marital_statuses = array(
            [   'id' => '1',
                'name' => 'Solteiro/a'
            ],
            [   'id' => '2',
                'name' => 'Casado/a'
            ],
            [   'id' => '3',
                'name' => 'Unido/a de Facto'
            ]);
        foreach ($marital_statuses as $marital_status){
            MaritalStatus::create($marital_status);
        }
        //MaritalStatus::create(['Solteiro/a']);
    }
}
