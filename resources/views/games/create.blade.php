<x-layouts.app>
    <div class="bg-[#e0e0d7]">
        <div class="flex flex-col items-center justify-center py-10">

            <h1 class="p-4 rounded-xl shadow-md w-auto text-2xl font-bold mb-4 bg-[#656d4a]/40">Wedstrijd Aanmaken</h1>

            @if ($errors->any())
                <ul class="mb-4 text-red-500">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ route('games.store') }}" method="POST"
                class="bg-[#656d4a]/20 p-6 rounded-xl shadow-md w-[500px]">
                @csrf

                <div class="flex flex-col gap-4">

                    <div class="flex flex-col">
                        <label class="mb-1">Team 1</label>
                        <select name="team1_id" required
                            class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                            <option value="">-- Selecteer team --</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <label class="mb-1">Team 2</label>
                        <select name="team2_id" required
                            class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                            <option value="">-- Selecteer team --</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <label class="mb-1">Scheidsrechter</label>
                        <select name="referee_id"
                            class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                            <option value="">-- Selecteer scheidsrechter --</option>
                            @foreach ($referees as $referee)
                                <option value="{{ $referee->id }}"
                                    {{ isset($game) && $game->referee_id == $referee->id ? 'selected' : '' }}>
                                    {{ $referee->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <label class="mb-1">Veld</label>
                        <input type="text" name="field" placeholder="bijv. Veld 3"
                            class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                    </div>

                    <div class="flex flex-col">
                        <label class="mb-1">Datum</label>
                        <input type="date" name="date"
                            class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                    </div>

                    <div class="flex flex-col">
                        <label class="mb-1">Tijd</label>
                        <input type="time" name="time"
                            class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                    </div>

                    <div class="flex gap-4">
                        <div class="flex flex-col w-1/2">
                            <label class="mb-1">Score Team 1</label>
                            <input type="number" name="team1_score" min="0" placeholder="0"
                                class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                        </div>
                        <div class="flex flex-col w-1/2">
                            <label class="mb-1">Score Team 2</label>
                            <input type="number" name="team2_score" min="0" placeholder="0"
                                class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
                        </div>
                    </div>

                    <div class="flex justify-center mt-2">
                        <button type="submit"
                            class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-4 py-1">
                            Aanmaken
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</x-layouts.app>
