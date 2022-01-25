<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\hatarnap;

class hatarnap2022Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $hatarnapok =[
            [
                'hat_nap' => '2022-01-03 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-01-05 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-01-12 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-01-17 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-01-20 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-01-25 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-02-21 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-02-25 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-03-21 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-03-31 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-04-01 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-04-20 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],[
                'hat_nap' => '2022-05-31 23:59:00',
                'hat_letrehozas' => Carbon::now(),
                'hat_mod' => Carbon::now(),
            ],
        ];
        hatarnap::insert($hatarnapok);
    }
}
