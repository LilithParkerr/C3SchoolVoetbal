<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        $teams = Team::where('user_id', auth()->id())->get();
        $aankomend = Game::where('date', '>=', now()->toDateString())
            ->orderBy('date', 'asc')
            ->orderBy('time', 'asc')
            ->take(20)
            ->get();

        $gespeeld = Game::where('date', '<', now()->toDateString())
            ->orderBy('date', 'desc')
            ->orderBy('time', 'desc')
            ->take(10)
            ->get();
        return view('dashboard', compact('teams', 'aankomend', 'gespeeld'));
    }

    public function adminIndex()
    {
        $teams = Team::all();
        $aankomend = Game::where('date', '>=', now()->toDateString())
            ->orderBy('date', 'asc')
            ->orderBy('time', 'asc')
            ->take(20)
            ->get();

        $gespeeld = Game::where('date', '<', now()->toDateString())
            ->orderBy('date', 'desc')
            ->orderBy('time', 'desc')
            ->take(10)
            ->get();

        return view('adminDashboard', compact('teams', 'aankomend', 'gespeeld'));
    }
}
