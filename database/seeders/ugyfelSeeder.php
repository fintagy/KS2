<?php

namespace Database\Seeders;

use App\Models\Ugyfel;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ugyfelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ucsoport::truncate();

        $ugyfelek =[
             [
                'ucsoport_id'=> '1',
                'ugyf_azonosito' => '001',
                'ugyf_leiras' => 'Józsi bácsi',
                'ugyf_adoszam' => '96965887-2-06',
                'ugyf_kadoszam' => 'HU96965887',
                'ugyf_alapitas' => '2021-11-16',
                'ugyf_aktiv' => '1',
                'ugyf_letrehozas' => Carbon::now(),
                'ugyf_mod' => Carbon::now()                
            ],[
                'ucsoport_id'=> '1',
                'ugyf_azonosito' => '002',
                'ugyf_leiras' => 'leírás_1',
                'ugyf_adoszam' => '63478956-1-26',
                'ugyf_kadoszam' => 'HU63478956',
                'ugyf_alapitas' => '2021-11-20',
                'ugyf_aktiv' => '1',
                'ugyf_letrehozas' => Carbon::now(),
                'ugyf_mod' => Carbon::now()
            ],[
                'ucsoport_id'=> '2',
                'ugyf_azonosito' => '003',
                'ugyf_leiras' => 'cipész',
                'ugyf_adoszam' => '96582536-5-64',
                'ugyf_kadoszam' => 'HU96582536',
                'ugyf_alapitas' => '2021-11-20',
                'ugyf_aktiv' => '1',
                'ugyf_letrehozas' => Carbon::now(),
                'ugyf_mod' => Carbon::now()
            ],[
                'ucsoport_id'=> '3',
                'ugyf_azonosito' => '004',
                'ugyf_leiras' => 'költöztetés',
                'ugyf_adoszam' => '78459658-1-26',
                'ugyf_kadoszam' => 'HU78459658',
                'ugyf_alapitas' => '2021-11-20',
                'ugyf_aktiv' => '1',
                'ugyf_letrehozas' => Carbon::now(),
                'ugyf_mod' => Carbon::now()
            ]
        ];
        Ugyfel::insert($ugyfelek);
    }
}