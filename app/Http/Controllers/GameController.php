<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cutoff = now()->subMonths(3);
        $teams = Team::where('user_id', auth()->id())->get();
       $aankomend = Game::whereNull('team1_score')
        ->whereNull('team2_score')
        ->orderBy('date')
        ->orderBy('time')
        ->get();

        $gespeeld = Game::where('date', '<', today())
         ->whereNotNull('team2_score')
            ->where('date', '>=', $cutoff)
            ->orderBy('date', 'desc')
            ->take(40)
            ->get();

        $verborgen = Game::where('date', '<', $cutoff)->count();



        return view('games.index', compact('teams', 'aankomend', 'gespeeld', 'verborgen'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        $referees = \App\Models\User::where('is_admin', false)
            ->whereDoesntHave('teams')
            ->get();
        return view('games.create', compact('teams', 'referees'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id',
            'referee_id' => 'nullable|exists:users,id',
            'field' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'team1_score' => 'nullable|integer|min:0',
            'team2_score' => 'nullable|integer|min:0',
        ]);

        Game::create($validated);

        return redirect('/games')->with('success', 'Wedstrijd aangemaakt.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $game = Game::findOrFail($id);
        $teams = Team::all();
        $referees = \App\Models\User::where('is_admin', false)
            ->whereDoesntHave('teams')
            ->get();
        return view('games.edit', compact('game', 'teams', 'referees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'team1_id' => 'required|exists:teams,id',
            'team2_id' => 'required|exists:teams,id',
            'referee_id' => 'nullable|exists:users,id',
            'field' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'team1_score' => 'nullable|integer|min:0',
            'team2_score' => 'nullable|integer|min:0',
        ]);
        $game = Game::findOrFail($id);
        $game->update($validated);
        return redirect('/')->with('success', 'Wedstrijd bijgewerkt.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        return redirect('/')->with('success', 'Wedstrijd verwijderd.');
    }
}
