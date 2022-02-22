<?php

namespace Database\Seeders;

use App\Models\Tarsasag;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class tarsasagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ucsoport::truncate();

        $tarsasagok =[
             [
                'ugyfel_id'=> '4',
                'tafa_id' => '2',
                'tars_cegnev' => 'Kovács Szállítmányozó Kft.',
                'tars_cegjszam' => '58-69-564987',
                'tars_letrehozas' => Carbon::now(),
                'tars_mod' => Carbon::now()
            ]
        ];
        Tarsasag::insert($tarsasagok);
    }
}