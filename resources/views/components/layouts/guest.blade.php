<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header>
<nav>
    @guest
    <a href="{{ route('login') }}">LogInPage</a>
    <a href="{{ route('register') }}">RegisterPage</a>
    @endguest
    @auth
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('admin-dashboard') }}">Admin Dashboard</a>
    @endauth
</nav>
</header>

<main>
 {{ $slot }}
</main>

<footer>

</footer>

</body>
</html>
