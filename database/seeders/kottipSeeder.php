<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\kottip;

class kottipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $kottipusok =[
             [
            'kottip_nev' => 'Bevallás',
            'kottip_letrehozas' => Carbon::now(),
            'kottip_mod' => Carbon::now(),
            ],[
            'kottip_nev' => 'Befizetés',
            'kottip_letrehozas' => Carbon::now(),
            'kottip_mod' => Carbon::now(),
            ],[
            'kottip_nev' => 'Adatszolgáltatás',
            'kottip_letrehozas' => Carbon::now(),
            'kottip_mod' => Carbon::now(),
            ],[
            'kottip_nev' => 'Közlemény',
            'kottip_letrehozas' => Carbon::now(),
            'kottip_mod' => Carbon::now(),
            ],[
            'kottip_nev' => 'Egyéb',
            'kottip_letrehozas' => Carbon::now(),
            'kottip_mod' => Carbon::now(),
            ]
        ];
        kottip::insert($kottipusok);
    }
}
