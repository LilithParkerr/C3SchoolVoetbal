<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#c2c5aa]">

<header>

<x-header></x-header>
</header>

<main>
 {{ $slot }}
</main>

<footer>
<x-footer></x-footer>
</footer>

</body>
</html>
