<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\szemely;

class szemelySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        szemely::factory()->count(15)->create();
    }
}
