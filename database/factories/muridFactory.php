<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\murid>
 */
class muridFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'tingkat' => fake()->randomElement(['10', '11', '12']),
            'jurusan' => fake()->randomElement(['RPL', 'TAV', 'TKR']),
            'nis' => fake()->randomNumber(5,true)
        ];
    }
}
