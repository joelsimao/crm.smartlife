<?php

use App\Phrase;
use Illuminate\Database\Seeder;

class PhraseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment(['production', 'development'])){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\phrases.csv';
        } else {
            $file = storage_path('app/csv/phrases.csv');
        }

        $phrases=csvToArray($file);
        foreach ($phrases as $phrase){
            Phrase::create($phrase);
        }
    }
}
