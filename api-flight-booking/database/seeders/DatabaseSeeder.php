<?php

namespace Database\Seeders;

use App\Models\Airport;
use App\Models\City;
use App\Models\User;
use Database\Factories\CityFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        City::factory(10)->create();
        Airport::factory(10)->create();

        Airport::factory()->createMany(
            [
                [
                    'city_id' => CityFactory::new()->create([
                        'name' => 'Moscow',
                    ])->id,
                    'name' => 'Sheremetyevo',
                    'iata' => 'SVO'
                ],
                [
                    'city_id' => CityFactory::new()->create([
                        'name' => 'Kazan',
                    ])->id,
                    'name' => 'Kazan',
                    'iata' => 'KZN'
                ],

            ]
        );
    }
}
