<x-layouts.app>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body class="bg-[#c2c5aa]">
    <main>
        <div class="mx-auto w-[85%] py-10">


            <h1 class="text-2xl font-bold mb-6">Welkom, {{ auth()->user()->name }}!</h1>

            <div class="grid grid-cols-2 gap-6">

                <div class="bg-[#a4ac86a8] rounded-xl p-6 flex gap-4">
                    <div class="w-1/2 flex flex-col justify-center">
                        <h2 class="text-lg font-semibold mb-2">Jouw team</h2>
                        <p class="text-gray-500 text-sm">Hier zie je het logo van het team waar jij aan gekoppeld bent.</p>
                    </div>
                    <div class="w-1/2 flex items-center justify-center">
                        @if(auth()->user()->team && auth()->user()->team->logo)
                            <img src="{{ asset('storage/' . auth()->user()->team->logo) }}" class="max-h-32 rounded-lg" alt="Team Logo">
                        @else
                            <img src="http://c3schoolvoetbal.test/images/images.jpg" alt="team logo" class="w-full h-48 object-cover rounded">
                        @endif
                    </div>
                </div>

                <div>
                    <h2 class="text-lg font-semibold mb-2">Aankomende wedstrijden</h2>
                    <table class="w-full text-sm mb-6">
                        <thead>
                            <tr class="bg-[#e0e0d7]">
                                <th class="p-2 text-left">Thuis</th>
                                <th class="p-2 text-left">Uit</th>
                                <th class="p-2 text-left">Datum</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($aankomend as $game)
                                <tr class="border-b">
                                    <td class="p-2">{{ $game->team1->name ?? '-' }}</td>
                                    <td class="p-2">{{ $game->team2->name ?? '-' }}</td>
                                    <td class="p-2">{{ $game->time }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="p-2 text-gray-400">Geen aankomende wedstrijden.</td></tr>
                            @endforelse
                        </tbody>
                    </table>

                    <h2 class="text-lg font-semibold mb-2">Gespeelde wedstrijden</h2>
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-[#e0e0d7]">
                                <th class="p-2 text-left">Thuis</th>
                                <th class="p-2 text-center">Score</th>
                                <th class="p-2 text-right">Uit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($gespeeld as $game)
                                <tr class="border-b">
                                    <td class="p-2">{{ $game->team1->name ?? '-' }}</td>
                                    <td class="p-2 text-center">{{ $game->team1_score }} - {{ $game->team2_score }}</td>
                                    <td class="p-2 text-right">{{ $game->team2->name ?? '-' }}</td>
                                </tr>
                            @empty
                                <tr><td colspan="3" class="p-2 text-gray-400">Geen gespeelde wedstrijden.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="mt-8">
                <div class="flex justify-between items-center mb-3">
                    <h3 class="text-lg font-semibold">Mijn Teams</h3>
                    <a href="" class="border border-[#c2c5aa] px-3 py-1 bg-[#a4ac86] hover:bg-[#656d4a] rounded-md text-sm">+ Maak een team aan</a>
                </div>
                <ul class="bg-white rounded-xl overflow-hidden divide-y">
                    @forelse($teams as $team)
                        <li class="p-3">{{ $team->name }}</li>
                    @empty
                        <li class="p-3 text-gray-400">Je hebt nog geen teams aangemaakt.</li>
                    @endforelse
                </ul>
            </div>

        </div>
    </main>
</body>
</html>
</x-layouts.app>
