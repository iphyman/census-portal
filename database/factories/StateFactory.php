<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Ebonyi',
            'capital' => 'Abakaliki',
            'demonym' => 'Ebonyians',
            'land_area' => 5533,
            'postal_code' => 840001,
            'iso_code' => 'NG-EB'
        ];
    }
}
