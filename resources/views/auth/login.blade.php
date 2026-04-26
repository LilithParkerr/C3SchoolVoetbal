<x-layouts.guest>
<div class="flex flex-col items-center justify-center min-h-[70vh] ">
    <h1 class="p-4 rounded-xl shadow-md w-75 text-2xl font-bold mb-4 bg-[#656d4a]/40">Login to your account</h1>

    <form action="{{ route('login.store') }}" method="POST" class="bg-[#656d4a]/20 p-6 rounded-xl shadow-md w-[300px]">
        @csrf

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

        <div class="flex flex-col gap-4">

            <div class="flex flex-col">
                <label for="email" class="mb-1">Email:</label>
                <input type="text" name="email" class=" bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
            </div>

            <div class="flex flex-col">
                <label for="password" class="mb-1">Password:</label>
                <input type="password" name="password" class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1">
            </div>

            <button type="submit" class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40  mt-2 border rounded-md px-3 py-1 self-center">
                Login
            </button>

        </div>
    </form>
</div>
</x-layouts.guest>
