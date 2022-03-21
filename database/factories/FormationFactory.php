<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom_formation' => $this->faker->sentence(rand(5, 10), true),
            'description' => $this->faker->sentences(15, true),
            'date_debut' => $this->faker->date(),
            'date_fin' => $this->faker->date(),
            'image' => "https://via.placeholder.com/1000",
        ];
    }
}
