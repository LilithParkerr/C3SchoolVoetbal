<footer class="fixed bottom-0 left-0  w-screen bg-linear-to-b from-[#656d4a] via-[#414833] to-[#333d29] text-black py-4  rounded-t-xl">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">


        <div class="flex justify-center">
            <a href="{{ url('/') }}">
                <img
                    src="{{ asset('images/squaredLogo.jpg') }}"
                    alt="C3 School Voetbal Logo"
                    class="h-17.5 w-auto object-contain rounded-md"
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
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="border border-[#c2c5aa] p-1 hover:bg-[#656d4a] bg-[#a4ac86] rounded-md">Log out
                    </button>
                </form>
            @if(auth()->user()->role !== 'admin')
            <a href="{{route('dashboard') }}" class="border border-[#c2c5aa] p-1 hover:bg-[#656d4a] bg-[#a4ac86] rounded-md">Dashboard</a>
            @endif
             @if(auth()->user()->role === 'admin')
            <a href="{{route('admin-dashboard') }}" class="border border-[#c2c5aa] p-1 hover:bg-[#656d4a] bg-[#a4ac86] rounded-md">Admin Dashboard</a>
            @endif
            @endauth
        </div>
        </navbar>

    </div>
</footer>
