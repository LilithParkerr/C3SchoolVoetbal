<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team1_id' => Team::factory(),
            'team2_id' => Team::factory(),
            'team1_score' => null,
            'team2_score' => null,
            'field' => 'Veld ' . fake()->numberBetween(1, 5),
            'referee_id' => User::factory(),
            'time' => fake()->time('H:i'),
            'date' => fake()->dateTimeBetween('now', '+2 months')->format('Y-m-d'),
        ];
    }
}
