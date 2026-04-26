<x-layouts.guest>
    <div class="flex flex-col items-center justify-center min-h-[70vh] my-14  ">
        <h1 class="p-4 rounded-xl shadow-md  max-w-[300px] text-2xl font-bold mb-4 bg-[#656d4a]/40">Register your account</h1>
        <form action="{{ route('register.store') }}" method="POST" class="bg-[#656d4a]/20 p-6 rounded-xl shadow-md  max-w-[300px]">

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
                    <label class="mb-1" for="name">Name:</label>
                    <input type="text"name="name" class=" bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1" >
                </div>

                <div class="flex flex-col">
                    <label class="mb-1" for="email">Email:</label>
                    <input type="text"name="email" class=" bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1" >
                </div>
                <div class="flex flex-col">
                    <label class="mb-1" for="password">Password:</label>
                    <input type="password" name="password" class=" bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1" >
                </div>

                <div class="flex flex-col">
                    <label class="mb-1" for="password_confirmation">Confirm password:</label>
                    <input type="password" name="password_confirmation" class=" bg-[#656d4a]/10 hover:bg-[#656d4a]/40 border rounded-md px-2 py-1" >
                </div>

                <div class="flex justify-center w-full text-center">
                    <input type="submit" value="register" class="bg-[#656d4a]/10 hover:bg-[#656d4a]/40  mt-2 border rounded-md px-3 py-1">
                </div>

            </div>



        </form>
    </div>
</x-layouts.guest>
