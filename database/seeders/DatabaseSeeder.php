<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Goal;
use App\Models\Team;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin123'),
            'is_admin' => true,
        ]);

        User::factory(10)->create();
        Team::factory(5)->create();

        $teamIds = Team::pluck('id');
        $userIds = User::pluck('id');

        Game::factory(3)->create([
            'team1_id' => $teamIds->random(),
            'team2_id' => $teamIds->random(),
            'referee_id' => $userIds->random(),
            'date' => fake()->dateTimeBetween('now', '+2 months')->format('Y-m-d'),
            'team1_score' => null,
            'team2_score' => null,
        ]);

        Game::factory(5)->create([
            'team1_id' => $teamIds->random(),
            'team2_id' => $teamIds->random(),
            'referee_id' => $userIds->random(),
            'date' => fake()->dateTimeBetween('-2 months', 'yesterday')->format('Y-m-d'),
            'team1_score' => fake()->numberBetween(0, 5),
            'team2_score' => fake()->numberBetween(0, 5),
        ]);

        $gameIds = Game::pluck('id');

        Goal::factory(20)->create([
            'player_id' => $userIds->random(),
            'game_id' => $gameIds->random(),
        ]);
    }

}
