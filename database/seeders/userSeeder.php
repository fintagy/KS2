<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ucsoport::truncate();

        $userek =[
             [
                'name'=> 'Finta Gyula',
                'email' => 'fintagyula@fintagy.hu',
                'email_verified_at' => null,
                'password' => '$2y$10$yPwEHFhmPow3uGd5UDqvGO0IBjlz2utcsn1HgiHfCj2vCZWrbbn4K',
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()         
            ]
        ];
        user::insert($userek);
    }
}