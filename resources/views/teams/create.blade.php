<x-layouts.app>

    <body class="bg-[#c2c5aa]">
        <div class="max-w-7xl mx-auto px-6 w-full flex flex-col items-center justify-center min-h-[70vh]">


            @if ($errors->any())
                <ul class="mb-4 text-red-500">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="translate-x-[-75px] flex flex-col items-center">
                <h1 class="p-4 rounded-xl shadow-md w-75 text-2xl font-bold mb-4 bg-[#656d4a]/40 text-center">Maak een
                    team!</h1>
                <form action="{{ route('teams.store') }}" method="POST"
                    class="bg-[#656d4a]/20 p-6 rounded-xl shadow-md w-[300px] border border-black-100">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" placeholder=""
                                class="bg-[#656d4a] rounded-md p-2 border border-black-100">

                            <label for="points">Points:</label>
                            @if (auth()->user()->is_admin)
                                <input type="number" name="points" id="points" placeholder=""
                                    class="bg-[#656d4a] rounded-md p-2 border border-black-100">

                            @else
                                <input type="number" value="1" disabled
                                    class="bg-[#656d4a]/50 rounded-md p-2 border opacity-60 cursor-not-allowed">
                            @endif

                            <div class="pt-5 mx-auto">
                                <input
                                    class="border border-[#c2c5aa] px-3 py-1 bg-[#a4ac86] hover:bg-[#656d4a] rounded-md text-sm"
                                    type="submit" value="submit">
                            </div>
                        </div>
                    </div>

            </div>
            </form>
            <div class="pt-5">
                @if (auth()->user()->is_admin)
                    <a href="{{ route('admin-dashboard') }}"
                        class="border border-[#c2c5aa] px-3 py-1 bg-[#a4ac86] hover:bg-[#656d4a] rounded-md text-sm mr-70">Go
                        back to dashboard</a>
                @else
                    <a href="{{ route('dashboard') }}"
                        class="border border-[#c2c5aa] px-3 py-1 bg-[#a4ac86] hover:bg-[#656d4a] rounded-md text-sm mr-70">Go
                        back to dashboard</a>
                @endif
            </div>
        </div>
</x-layouts.app>
