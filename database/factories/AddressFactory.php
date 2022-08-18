<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{

    protected $model = Address::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'street' => fake()->streetName,
            'city' => fake()->city,
            'state' => fake()->state,
            'zip' => fake()->postcode,
            'neighborhood' => fake()->city,
            'country' => fake()->country,
            'number' => fake()->buildingNumber,
            'complement' => fake()->secondaryAddress,
            'type' => fake()->randomElement(['home', 'work', 'other'])
        ];
    }
}
