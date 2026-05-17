<x-layouts.app>
<div class="flex flex-col items-center justify-center py-10">

    <h1 class="p-4 rounded-xl shadow-md w-auto text-2xl font-bold mb-4 bg-[#656d4a]/40">Wedstrijd Bewerken</h1>

    @if ($errors->any())
        <ul class="mb-4 text-red-500">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('games.update', $game->id) }}" method="POST" class="bg-[#656d4a]/20 p-6 rounded-xl shadow-md w-[500px]">
        @csrf
        @method('PUT')

        <div class="flex flex-col gap-4">

            <div class="flex flex-col">
                <label class="mb-1">Team 1</label>
                <select name="team1_id" required class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}" {{ $game->team1_id == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label class="mb-1">Team 2</label>
                <select name="team2_id" required class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                    @foreach ($teams as $team)
                        <option value="{{ $team->id }}" {{ $game->team2_id == $team->id ? 'selected' : '' }}>
                            {{ $team->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label class="mb-1">Scheidsrechter</label>
                <select name="referee_id" class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                    <option value="">-- Selecteer scheidsrechter --</option>
                    @foreach ($referees as $referee)
                        <option value="{{ $referee->id }}" {{ $game->referee_id == $referee->id ? 'selected' : '' }}>
                            {{ $referee->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col">
                <label class="mb-1">Veld</label>
                <input type="text" name="field" value="{{ $game->field }}"
                    class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
            </div>

            <div class="flex flex-col">
                <label class="mb-1">Datum</label>
                <input type="date" name="date" value="{{ $game->date }}"
                    class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
            </div>

            <div class="flex flex-col">
                <label class="mb-1">Tijd</label>
                <input type="time" name="time" value="{{ $game->time }}"
                    class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
            </div>

            <div class="flex gap-3 justify-center mt-2">
                <button type="submit" class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-4 py-1">
                    Opslaan
                </button>

                <button type="submit" form="delete-form" class="bg-red-400/40 hover:bg-red-500/60 border border-red-400 text-red-800 rounded-md px-4 py-1">
                    Verwijderen
                </button>
            </div>

        </div>
    </form>

    <form id="delete-form" action="{{ route('games.destroy', $game->id) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</div>
</x-layouts.app>
