<?php

namespace Database\Factories;

use App\Models\Config;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Config>
 */
class ConfigFactory extends Factory
{

    protected $model = Config::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'defaultBackgroundColor' => fake()->hexColor,
            'defaultFontColor' => fake()->hexColor,
            'defaultFontFamily' => fake()->word,
            'defaultFontSize' => fake()->numberBetween(1, 100),
        ];
    }
}
