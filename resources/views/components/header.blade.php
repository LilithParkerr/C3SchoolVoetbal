<header class=" w-screen bg-linear-to-b from-[#333d29] via-[#414833] to-[#656d4a] text-black py-4  ">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">

        <!-- Left side (empty for balance) -->
        <div class="w-32"></div>


        <div class="flex justify-center">
            <a href="{{ url('/') }}">
                <img
                    src="{{ asset('images/squaredLogo.jpg') }}"
                    alt="C3 School Voetbal Logo"
                    class="h-27.5 w-auto object-contain rounded-md"
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
                <button type="submit" class="border border-[#c2c5aa] p-1 hover:bg-[#656d4a] bg-[#a4ac86] rounded-md"> Log out
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
</header>
