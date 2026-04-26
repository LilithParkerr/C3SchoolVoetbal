<x-layouts.guest>
    <section class="bg-[#3E436F]/50 p-2 mb-4">
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






</x-layouts.guest>
