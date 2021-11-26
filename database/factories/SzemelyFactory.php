<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\szemely;
use Carbon\Carbon;

class SzemelyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    

    public function definition()
    {        
        $faker = \Faker\Factory::create('hu_HU');
        return [
            'ugyfel_id' => $faker->numberBetween(1, 4),
            'szem_beosztas' => $faker->jobTitle(),
            'szem_vezeteknev' => $faker->lastName(),
            'szem_keresztnev' => $faker->firstName(),
            'szem_aktiv' => '1',
            'szem_letrehozas' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'szem_mod' =>  Carbon::now()->format('Y-m-d H:i:s')
        ];        
    }
}
