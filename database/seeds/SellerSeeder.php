<?php

use App\Seller;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(App::environment(['production', 'development'])){
            $file = 'C:\inetpub\vhosts\smartlife.pt\crm.smartlife.pt\storage\app\csv\sellers.csv';
        } else {
            $file = storage_path('app/csv/sellers.csv');
        }

        $sellers=csvToArray($file);
        foreach ($sellers as $seller){
            Seller::create($seller);
        }
    }
}
