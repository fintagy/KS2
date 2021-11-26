<?php

namespace Database\Seeders;

use App\Models\ucsoport;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ucsoportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ucsoport::truncate();

        $ucsoportok =[
             [
            'ucsop_nev' => 'Magánszemély',
            'ucsop_letrehozas' => Carbon::now(),
            'ucsop_mod' => Carbon::now(),
            ],[
            'ucsop_nev' => 'Egyéni vállalkozó',
            'ucsop_letrehozas' => Carbon::now(),
            'ucsop_mod' => Carbon::now(),
            ],[
            'ucsop_nev' => 'Társaság',
            'ucsop_letrehozas' => Carbon::now(),
            'ucsop_mod' => Carbon::now(),
            ]
        ];
        ucsoport::insert($ucsoportok);
    }
}
