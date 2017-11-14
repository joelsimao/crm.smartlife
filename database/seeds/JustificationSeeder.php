<?php

use App\Justification;
use Illuminate\Database\Seeder;

class JustificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $justifications = array(
            [   'id' => '1',
                'description' => 'Linha Cheia'
            ],
            [   'id' => '2',
                'description' => 'NQ-S/cônjuge'
            ],
            [   'id' => '3',
                'description' => 'NQ-Recusou'
            ],
            [   'id' => '4',
                'description' => 'NQ-S/condições'
            ],
            [   'id' => '5',
                'description' => 'S/Docs'
            ],
            [   'id' => '6',
                'description' => 'Sentou'
            ],);
        foreach ($justifications as $justification){
            Justification::create($justification);
        }
    }
}
