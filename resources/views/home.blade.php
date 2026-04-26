<x-layouts.guest>
    <section class="bg-[#3E436F]/50 p-2 mb-4 mt-0 rounded-b-xl">
    <h2 class="flex justify-center font-bold">VoetbalVandaag is het centrale overzicht voor schoolvoetbal. Teams, wedstrijden, uitslagen — alles op één plek, altijd up-to-date.</h2>
</section>

<div class="flex items-center gap-6 p-6">
    <div class="w-1/4">
        <img src="{{ asset('images/images.jpg') }}" alt="Left image" class="w-full h-48 object-cover rounded">
    </div>

    <div class="flex flex-col gap-3 w-1/2">
        <h1 class="text-2xl font-bold">
            @auth
            <span class=" font-medium text-gray-800">
                Welkom {{ Auth::user()->name }} bij VoetbalVandaag!
            </span>
            @else
            <span class="font-medium text-gray-800">Welkom bij VoetBalVandaag
            </span>
            @endauth</h1>
        <p class="text-gray-600">VoetbalVandaag is dé plek voor schoolvoetbal — van de aanmelding van teams tot de allerlaatste wedstrijduitslagen. Bekijk welke teams meedoen, plan je wedstrijden en houd de resultaten bij. Alles wat je nodig hebt, vind je hier.</p>

    </div>

    <div class="w-1/4">
        <img src="{{ asset('images/images.jpg') }}" alt="Right image" class="w-full h-48 object-cover rounded">
    </div>
</div>

<div class="mt-10 mb-15  mx-25">
    <p class="flex justify-center font-bold">Dit is de huidige top 3 van dit seizoen!</p>
<table class="w-full text-sm">
    <thead>
        <tr class="bg-[#e0e0d7]">
            <th class="p-2 text-left">Thuis</th>
            <th class="p-2 text-center">Score</th>
            <th class="p-2 text-right">Uit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($games as $game)
            <tr class="border-b">
                <td class="p-2">{{ $game->team1->name }}</td>
                <td class="p-2 text-center">{{ $game->team1_score }} - {{ $game->team2_score }}</td>
                <td class="p-2 text-right">{{ $game->team2->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

<div class="mt-10 mb-15  mx-25">
    <p class="flex justify-center font-bold">DIt is de huidige plaatsing en puntentelling! </p>
    <table class="w-full text-sm">
        <thead>
            <tr class="bg-[#e0e0d7]">
                <th class="p-2 text-left">Plaats</th>
                <th class="p-2 text-left">Team</th>
                <th class="p-2 text-center">Punten</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $index => $team)
                <tr class="border-b">
                    <td class="p-2">{{ $index + 1 }}</td>
                    <td class="p-2">{{ $team->name }}</td>
                    <td class="p-2 text-center">{{ $team->points }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


</x-layouts.guest>
