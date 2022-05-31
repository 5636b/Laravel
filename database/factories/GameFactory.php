<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'categoria' => $this->faker->word(),
            'ano_criacao' => $this->faker->year(),
            'valor' => $this->faker->numberBetween($int1 = 0, $int2 = 300)
        ];
    }
}
