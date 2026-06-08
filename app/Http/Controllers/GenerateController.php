<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function seed()
    {
        $teams = Team::all();

        for ($i = 0; $i < 10; $i++) {
            $team1 = $teams->random();
            $team2 = $teams->where('id', '!=', $team1->id)->random();

            $exists = Game::where('team1_id', $team1->id)
                ->where('team2_id', $team2->id)
                ->exists();

            if (!$exists) {
                Game::create([
                    'team1_id' => $team1->id,
                    'team2_id' => $team2->id,
                    'team1_score' => Null,
                    'team2_score' => Null,
                    'field' => 'Veld ' . rand(1, 4),
                    'referee_id' => rand(1, 10),
                    'time' => now()->setTime(rand(8, 20), 0)->format('H:i'),
                    'date' => now()->subDays(rand(1, 200))->format('Y-m-d'),
                ]);
            }
        }

        return back();
    }
}
