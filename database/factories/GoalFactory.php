<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Goal;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Goal>
 */
class GoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'player_id' => User::factory(),
            'game_id' => Game::factory(),
            'minute' => fake()->numberBetween(1, 90),
        ];
    }

}
