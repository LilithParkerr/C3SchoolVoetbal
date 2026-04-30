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
        $aankomend = Game::where('time', '>=', now())->orderBy('time')->get();
        $gespeeld = Game::where('time', '<', now())->orderBy('time', 'desc')->get();

        return view('dashboard', compact('teams', 'aankomend', 'gespeeld'));
    }
}
