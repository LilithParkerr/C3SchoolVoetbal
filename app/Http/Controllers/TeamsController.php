<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $teams = Team::where('user_id', auth()->id())->get();
       if(auth()->user()->is_admin) {
    return redirect()->route('admin-dashboard');
}

return redirect()->route('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'points' =>  auth()->user()->is_admin ? 'required|integer' : 'nullable|integer',
        ]);
        $validate['user_id'] = auth()->id();
       $teams = Team::create($validate);
       if(auth()->user()->is_admin) {
       return redirect()->route('admin-dashboard');
       }

       return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teams = Team::findorfail($id);
        return view('teams.show', compact('team'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $team = Team::findOrFail($id);

       return view('teams.edit', compact('team'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validate = $request->validate([
            'name' => 'required|string|max:255',
            'points' =>  auth()->user()->is_admin ? 'required|integer' : 'nullable|integer',
        ]);
        $validate['user_id'] = auth()->id();
        $teams = Team::findOrFail($id);
        $teams->update($validate);
          if(auth()->user()->is_admin) {
       return redirect()->route('admin-dashboard');
       }

       return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        Team::destroy($id);
        if(auth()->user()->is_admin) {
       return redirect()->route('admin-dashboard');
       }

       return redirect()->route('dashboard');
    }

}
