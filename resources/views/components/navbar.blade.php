<nav>
    <div class="flex space-x-4">
    @guest
    <a href="{{ route('login') }}">LogInPage</a>
    <a href="{{ route('register') }}">RegisterPage</a>
    @endguest
    </div>
    <div class="flex space-x-4">
    @auth
    <a href="{{ route('dashboard') }}">Dashboard</a>
    @endauth
    </div>
</nav>
