<footer class="w-screen bg-gradient-to-b from-[#656d4a] via-[#414833] to-[#333d29] text-black py-4  rounded-b-xl">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">


        <div class="flex justify-center">
            <a href="{{ url('/') }}">
                <img
                    src="{{ asset('images/squaredLogo.jpg') }}"
                    alt="C3 School Voetbal Logo"
                    class="h-[70px] w-auto object-contain rounded-md"
                    style="max-width: 180px;"
                >
            </a>
        </div>

        <navbar>
        <div class="flex items-center gap-8">
            @guest
            <a href="{{route('login') }}" class="border border-[#c2c5aa] p-1 hover:bg-[#656d4a] bg-[#a4ac86] rounded-md">Login</a>
            <a href="{{route('register') }}" class="border border-[#c2c5aa] p-1 hover:bg-[#656d4a] bg-[#a4ac86] rounded-md">Register</a>
            @endguest
            @auth
            <a href="{{route('dashboard') }}" class="border border-[#c2c5aa] p-1 hover:bg-[#656d4a] bg-[#a4ac86] rounded-md">Dashboard</a>
            <a href="{{route('admin-dashboard') }}" class="border border-[#c2c5aa] p-1 hover:bg-[#656d4a] bg-[#a4ac86] rounded-md">Admin Dashboard</a>
            @endauth
        </div>
        </navbar>

    </div>
</footer>
