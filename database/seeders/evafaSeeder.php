<?php

namespace Database\Seeders;

use App\Models\Evafa;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class evafaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ucsoport::truncate();

        $evafak =[
             [
                'evafa_kod' => 'E1',
                'evafa_leiras' => 'Áfa fizetésére nem kötelezett',
                'evafa_letrehozas' => Carbon::now(),
                'evafa_mod' => Carbon::now(),
            ],[
                'evafa_kod' => 'E2',
                'evafa_leiras' => 'Áfa fizetésére kötelezett',
                'evafa_letrehozas' => Carbon::now(),
                'evafa_mod' => Carbon::now(),
            ],[
                'evafa_kod' => 'E3',
                'evafa_leiras' => 'Evaalany egyéni vállalkozó',
                'evafa_letrehozas' => Carbon::now(),
                'evafa_mod' => Carbon::now(),
            ]
        ];
        Evafa::insert($evafak);
    }
}
