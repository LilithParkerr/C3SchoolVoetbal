<x-layouts.guest>
    <form action="{{ route('login.store') }}" method="POST" class="mt-2 ml-2">
        <div class="flex flex-col">
        @csrf
<div class="flex mb-2">
        <label for="email">Email:</label>
        <input type="text"name="email" class="border rounded-md ml-2" >
</div>
<div class="flex mb-2">
        <label for="password">Password:</label>
        <input type="password" name="password" class="border rounded-md ml-2" >
</div>
<div class="flex">
        <input type="submit" value="login" class="border rounded-md ml-2 px-2 py-1">
</div>


    </div>
    </form>
</x-layouts.guest>
