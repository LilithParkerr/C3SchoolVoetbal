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

        Game::factory(8)->create([
            'team1_id' => $teamIds->random(),
            'team2_id' => $teamIds->random(),
            'referee_id' => $userIds->random(),
        ]);

        $gameIds = Game::pluck('id');

        Goal::factory(20)->create([
            'player_id' => $userIds->random(),
            'game_id' => $gameIds->random(),
        ]);
    }

}
