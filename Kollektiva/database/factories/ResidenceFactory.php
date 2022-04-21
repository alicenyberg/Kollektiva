<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ResidenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $booleans = ['true', 'false'];
        $houseImage = [
            'house1.png',
            'house2.png',
            'house3.png',
            'house4.png',
            'house5.png',
        ];
        /*
            Wont us for now 😖
            'house5.png',
            'house6.png',
            'house7.png',
            'house8.png',
            'house9.png',
        */

        $houseName = [
            'Blåhusgatan 8F',
            'Grönagatan 10A',
            'Ärlegatan 3C',
            'Amiralitetsgatan 23B',
            'Kaptensgatan 14D',
            'Gröna Vallen 7C',
            'Jordhyttegatan 2B',
            'Dalavägen 8C',
            'Argonomgatan 9E'
        ];

        return [
            'name' => $this->faker->randomElement($houseName),
            'squaremeters' => $this->faker->numberBetween(20, 70),
            'rooms' => $this->faker->numberBetween(2, 8),
            'residents' => $this->faker->numberBetween(2, 8),
            'rent' => $this->faker->numberBetween(2000, 10000),
            'smoking' => $this->faker->randomElement($booleans),
            'animals' => $this->faker->randomElement($booleans),
            'partying' => $this->faker->randomElement($booleans),
            'image' => $this->faker->randomElement($houseImage),
        ];
    }
}
