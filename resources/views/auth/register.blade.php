<x-layouts.guest>
    <form action="{{ route('register.store') }}" method="POST" class="mt-2 ml-2">
        <div class="flex flex-col">
        @csrf
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div class="flex mb-2">
<label for="name">Name:</label>
<input type="text"name="name" class="border rounded-md ml-2" >
</div>

<div class="flex mb-2">
        <label for="email">Email:</label>
        <input type="text"name="email" class="border rounded-md ml-2" >
</div>
<div class="flex mb-2">
        <label for="password">Password:</label>
        <input type="password" name="password" class="border rounded-md ml-2" >
</div>

<div class="flex mb-2">
        <label for="password_confirmation">Confirm password:</label>
        <input type="password" name="password_confirmation" class="border rounded-md ml-2" >
</div>
<div class="flex">
        <input type="submit" value="register" class="border rounded-md ml-2 px-2 py-1">
</div>


    </div>
    </form>
</x-layouts.guest>
