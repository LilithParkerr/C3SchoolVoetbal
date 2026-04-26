<x-layouts.guest>
    <h1 class="flex justify-center">@auth
    <span class="text-sm font-medium text-gray-800">
        Hello, {{ Auth::user()->name }}!
    </span>
@else
    <span class="text-sm font-medium text-gray-800">
        Welcome
    </span>
@endauth</h1>
</x-layouts.guest>
