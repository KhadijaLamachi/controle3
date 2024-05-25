<?php

namespace Database\Factories;
use App\Models\Car;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $carIds = Car::pluck('id')->toArray();
        return [
            //
            'nom' => fake()->name(),
            'date_naissance' => fake()->date(),
            'id_car' => fake()->randomElement($carIds)
            
        ];
    }
}
