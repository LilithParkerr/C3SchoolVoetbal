<x-layouts.app>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-[#c2c5aa]">
      <main>
            @if ($errors->any())
            <ul class="mb-4 text-red-500">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif


    </main>
</body>
</x-layouts.app>
