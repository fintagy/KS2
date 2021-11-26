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
            ucsoportSeeder::class,
            msafaSeeder::class,
            evafaSeeder::class,
            tafaSeeder::class,
            ugyfelSeeder::class,
            maganszemelySeeder::class,
            egyenivallalkozoSeeder::class,
            tarsasagSeeder::class,
            userSeeder::class,
            szemelySeeder::class
        ]);
    }
}
