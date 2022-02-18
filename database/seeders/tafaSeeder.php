<?php

namespace Database\Seeders;

use App\Models\tafa;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class tafaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ucsoport::truncate();

        $tafak =[
             [                
                'tafa_kod' => 'T1',
                'tafa_leiras' => 'Áfa fizetésére nem kötelezett',
                'tafa_letrehozas' => Carbon::now(),
                'tafa_mod' => Carbon::now(),
            ],[                
                'tafa_kod' => 'T2',
                'tafa_leiras' => 'Áfa fizetésére kötelezett',
                'tafa_letrehozas' => Carbon::now(),
                'tafa_mod' => Carbon::now(),
            ],[
                'tafa_kod' => 'T3',
                'tafa_leiras' => 'Evaalany társaság',
                'tafa_letrehozas' => Carbon::now(),
                'tafa_mod' => Carbon::now(),
            ],[
                'tafa_kod' => 'T4',
                'tafa_leiras' => 'Non-profit szervezet, egyéb adóalanyok (alapítvány, közalapítvány, társadalmi szervezet, köztestület, egyház, lakásszövetkezet, önkéntes kölcsönös biztosító pénztár) és egyéb (pl. ügyvédi iroda, végrehajtói iroda, szabadalmi ügyvivő iroda, közjegyzői iroda, magánszemélyek jogi személyiséggel rendelkező munkaközössége, erdőbirtokossági társulat, MRP-célszervezet, közhasznú társaság, vizitársulat)',
                'tafa_letrehozas' => Carbon::now(),
                'tafa_mod' => Carbon::now(),
            ]
        ];
        tafa::insert($tafak);
    }
}
