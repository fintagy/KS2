<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            jogosultsagSeeder::class,
            ucsoportSeeder::class,
            userSeeder::class,
            msafaSeeder::class,
            evafaSeeder::class,
            tafaSeeder::class,
            ugyfelSeeder::class,
            maganszemelySeeder::class,
            egyenivallalkozoSeeder::class,
            tarsasagSeeder::class,            
            szemelySeeder::class,
            kottipSeeder::class,
            kotelezettsegSeeder::class,
            //hatarnap2021Seeder::class,
            hatarnap2022Seeder::class
        ]);
    }
}
