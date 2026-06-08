<x-layouts.app>
    <div class="bg-[#c2c5aa]">
        <div class="mx-auto w-[85%] py-10 ">
            <div class="flex justify-between items-center mb-3">
                <h2 class="text-lg font-semibold mb-2">Aankomende wedstrijden</h2>
                <a href="{{ route('games.create') }}"
                    class="border border-[#c2c5aa] px-3 py-1 bg-[#a4ac86] hover:bg-[#656d4a] rounded-md text-sm">
                    + Wedstrijd aanmaken
                </a>

                <form action="{{ route('games.seed') }}" method="POST">
                    @csrf
                    <button type="submit" class="border border-[#c2c5aa] px-3 py-1 bg-[#a4ac86] hover:bg-[#656d4a] rounded-md text-sm"> Genereer Wedstrijd </button>

                </form>

            </div>


            <table class="w-full text-sm mb-6">
                <thead>
                    <tr class="bg-[#e0e0d7]">
                        <th class="p-2 text-left">Thuis</th>
                        <th class="p-2 text-left">Uit</th>
                        <th class="p-2 text-left">Datum</th>
                        @if (auth()->check() && auth()->user()->is_admin)
                            <th class="p-2 text-left">Actie</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse($aankomend as $game)
                        <tr class="border-b">
                            <td class="p-2">{{ $game->team1->name ?? '-' }}</td>
                            <td class="p-2">{{ $game->team2->name ?? '-' }}</td>
                            <td class="p-2">{{ \Carbon\Carbon::parse($game->date)->format('d-m-Y') }}
                                {{ $game->time }}
                            </td>
                            @if (auth()->check() && auth()->user()->is_admin)
                                <td class="p-2">
                                    <a href="{{ route('games.edit', $game->id) }}"
                                        class="border border-[#c2c5aa] px-2 py-1 bg-[#a4ac86] hover:bg-[#656d4a] rounded-md text-xs">
                                        Bewerken
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-2 text-gray-400">Geen aankomende wedstrijden.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

                <h2 class="text-lg font-semibold">Gespeelde wedstrijden</h2>

            <table class="w-full text-sm">
                <thead>
                    <tr class="bg-[#e0e0d7]">
                        <th class="p-2 text-left">Thuis</th>
                        <th class="p-2 text-center">Score</th>
                        <th class="p-2 text-right">Uit</th>
                        @if (auth()->check() && auth()->user()->is_admin)
                            <th class="p-2 text-left">Actie</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse($gespeeld as $game)
                        <tr class="border-b">
                            <td class="p-2">{{ $game->team1->name ?? '-' }}</td>
                            <td class="p-2 text-center">{{ $game->team1_score }} - {{ $game->team2_score }}</td>
                            <td class="p-2 text-right">{{ $game->team2->name ?? '-' }}</td>
                            @if (auth()->check() && auth()->user()->is_admin)
                                <td class="p-2">
                                    <a href="{{ route('games.edit', $game->id) }}"
                                        class="border border-[#c2c5aa] px-2 py-1 bg-[#a4ac86] hover:bg-[#656d4a] rounded-md text-xs">
                                        Bewerken
                                    </a>
                                </td>
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-2 text-gray-400">Geen gespeelde wedstrijden.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
