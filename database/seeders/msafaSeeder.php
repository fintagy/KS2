<?php

namespace Database\Seeders;

use App\Models\Msafa;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class msafaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ucsoport::truncate();

        $msafak =[
             [
                'msafa_kod' => 'M0',
                'msafa_leiras' => 'Adószámmal nem rendelkező',
                'msafa_letrehozas' => Carbon::now(),
                'msafa_mod' => Carbon::now(),
            ],[
                'msafa_kod' => 'M1',
                'msafa_leiras' => 'Adószámmal rendelkező, aki nem alanya az általános forgalmi adónak (pl. munkáltatói minőségben)',
                'msafa_letrehozas' => Carbon::now(),
                'msafa_mod' => Carbon::now(),
            ],[
                'msafa_kod' => 'M2',
                'msafa_leiras' => 'Adószámmal rendelkező, áfa fizetésére nem kötelezett',
                'msafa_letrehozas' => Carbon::now(),
                'msafa_mod' => Carbon::now(),
            ],[
                'msafa_kod' => 'M3',
                'msafa_leiras' => 'Adószámmal rendelkező, áfa fizetésére nem kötelezett',
                'msafa_letrehozas' => Carbon::now(),
                'msafa_mod' => Carbon::now(),
                ]
            ];
        Msafa::insert($msafak);
    }
}
