<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Groupe>
 */
class GroupeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $intitules = ['DD101','DD102','DD103','DD104','DDOWFS202','DDOWFS203','DDOWFS204'];

        return [
            'intitule' => fake()->randomElement($intitules),
            'nbr_stagiaires' => fake()->numberBetween(22,28), 
        ];
    }
}
