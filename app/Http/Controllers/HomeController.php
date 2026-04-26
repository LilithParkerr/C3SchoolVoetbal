<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Game;
use App\Models\Team;
use App\Models\Goal;
use App\Models\User;



class HomeController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('points', 'DESC')->get();
        $games = Game::with(['team1', 'team2'])
        ->orderByRaw('(team1_score + team2_score) DESC')
        ->take(3)
        ->get();
        $goals = Goal::with('player')->get();
        $users = User::all();

        return view('home', compact('teams', 'games', 'goals', 'users'));
    }
}
