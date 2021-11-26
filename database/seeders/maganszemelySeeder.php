<?php

namespace Database\Seeders;

use App\Models\maganszemely;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class maganszemelySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ucsoport::truncate();

        $maganszemelyek =[
             [
                'ugyfel_id'=> '1',
                'msafa_id' => '3',
                'ms_adoazonosito' => '0123456789',
                'ms_tajszam' => '87869876',
                'ms_szulhely' => 'Szeged',
                'ms_szulido' => '1957-07-15',
                'ms_aneve' => 'Topomán Rozália',
                'ms_szigszam' => '859732HD',
                'ms_letrehozas' => Carbon::now(),
                'ms_mod' => Carbon::now()            
            ],[
                'ugyfel_id'=> '2',
                'msafa_id' => '3',
                'ms_adoazonosito' => '25639874',
                'ms_tajszam' => '865987456',
                'ms_szulhely' => 'Szentes',
                'ms_szulido' => '1969-08-14',
                'ms_aneve' => 'Kiss Mária',
                'ms_szigszam' => '',
                'ms_letrehozas' => Carbon::now(),
                'ms_mod' => Carbon::now()    
            ]
        ];
        maganszemely::insert($maganszemelyek);
    }
}