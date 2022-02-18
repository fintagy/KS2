<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\jogosultsag;

class jogosultsagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ucsoport::truncate();

        $jogosultsagok =[
             [
                'jog_nev'=> 'Főnök',
                'jog_leiras' => 'Mindenhez van jogosultsága',               
                'jog_aktiv' => true,                    
                'jog_letrehozas' => Carbon::now(),
                'jog_mod' => Carbon::now()         
            ]
        ];
        jogosultsag::insert($jogosultsagok);
    }
}