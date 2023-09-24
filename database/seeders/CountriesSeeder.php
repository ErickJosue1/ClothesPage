<?php

namespace Database\Seeders;

use App\Models\countries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usaStates = [
            "MOR" => 'Morelos',
            "CDMX" => 'Ciudad de Mexico',
            "GR" => 'Guerrero',
            "PL" => 'Puebla',
            "GT" => 'Guanajuato',
        ];
        $countries = [
            ['code' => 'mx', 'name' => 'Mexico', 'states' => json_encode($usaStates)],
        ];

        countries::insert($countries);
    }
}
