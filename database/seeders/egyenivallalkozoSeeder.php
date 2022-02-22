<?php

namespace Database\Seeders;

use App\Models\Egyenivallalkozo;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class egyenivallalkozoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ucsoport::truncate();

        $egyenivallalkozok =[
             [
                'ugyfel_id'=> '3',
                'evafa_id' => '2',
                'ev_okmnyszam' => '45657567',
                'ev_statszam' => '7325656',
                'ev_nev' => 'Kovács Sándor E.V.',                    
                'ev_letrehozas' => Carbon::now(),
                'ev_mod' => Carbon::now()         
            ]
        ];
        Egyenivallalkozo::insert($egyenivallalkozok);
    }
}