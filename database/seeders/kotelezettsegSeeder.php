<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\kotelezettseg;

class kotelezettsegSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kotelezettsegek =[
             [
                'kottip_id' => '1',
                'kot_leiras' => 'Havi bevallás a kifizetésekkel, juttatásokkal összefüggő adóról, járulékokról és egyéb adatokról, valamint a szakképzési hozzájárulásról',
                'kot_szam' => '2008',
                'kot_kie' => 'M, E, T',
                'kot_letrehozas' => Carbon::now(),
                'kot_mod' => Carbon::now(),
            ],[
                'kottip_id' => '2',
                'kot_leiras' => 'Az adókedvezményre jogosító igazolást kiállító szerv adatszolgáltatása a tartósan álláskereső, a gyermekgondozási díjban, gyermekgondozást segítő ellátásban, gyermeknevelési támogatásban, valamint legalább 3 gyermek után járó családi pótlékban részesülő magánszemély részére kiállított igazolásról',
                'kot_szam' => 'K100',
                'kot_kie' => 'T',
                'kot_letrehozas' => Carbon::now(),
                'kot_mod' => Carbon::now(),
            ],[
                'kottip_id' => '1',
                'kot_leiras' => 'Bevallás a kiegészítő tevékenységet folytatónak nem minősülő egyéni vállalkozó szociális hozzájárulási adó és járulék kötelezettségéről, valamint a biztosított mezőgazdasági őstermelő járulék kötelezettségéről”',
                'kot_szam' => '2058',
                'kot_kie' => 'M2, M3, E',
                'kot_letrehozas' => Carbon::now(),
                'kot_mod' => Carbon::now(),
            ],[
                'kottip_id' => '1',
                'kot_leiras' => 'Havi bevallás a 2019. évi CXXII. törvény 87. § szerinti kötelezettek részére a szociális hozzájárulási adóról, a járulékokról és egyéb adatokról',
                'kot_szam' => '2008INT',
                'kot_kie' => 'M, E, T',
                'kot_letrehozas' => Carbon::now(),
                'kot_mod' => Carbon::now(),
            ],[
                'kottip_id' => '2',
                'kot_leiras' => 'A munkáltató adatszolgáltatása a védett korban elbocsátott köztisztviselők részére kiállított igazolásokról',
                'kot_szam' => 'K111',
                'kot_kie' => 'T',
                'kot_letrehozas' => Carbon::now(),
                'kot_mod' => Carbon::now(),
            ],[
                'kottip_id' => '2',
                'kot_leiras' => 'Adatszolgáltatás a jövedéki engedélyes kereskedő készletváltozásáról',
                'kot_szam' => 'NAV_J09',
                'kot_kie' => 'E1, E2, T1, T2, T4',
                'kot_letrehozas' => Carbon::now(),
                'kot_mod' => Carbon::now(),
            ],[
                'kottip_id' => '2',
                'kot_leiras' => 'Üzemanyagtöltő állomás adatszolgáltatása',
                'kot_szam' => 'NAV_J41',
                'kot_kie' => 'E1, E2, T1, T2, T4',
                'kot_letrehozas' => Carbon::now(),
                'kot_mod' => Carbon::now(),
            ],[
                'kottip_id' => '3',
                'kot_leiras' => 'Kisadózó vállalkozások tételes adója',
                'kot_szam' => '',
                'kot_kie' => 'E1, E2, T1, T2',
                'kot_letrehozas' => Carbon::now(),
                'kot_mod' => Carbon::now(),
            ],[
                'kottip_id' => '3',
                'kot_leiras' => 'Szociális hozzájárulási adó',
                'kot_szam' => '',
                'kot_kie' => 'M1, M2, M3, E, T',
                'kot_letrehozas' => Carbon::now(),
                'kot_mod' => Carbon::now(),
            ]
        ];
        kotelezettseg::insert($kotelezettsegek);
    }
}
