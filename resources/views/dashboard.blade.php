<x-layouts.app>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-[#c2c5aa]">
      <main>
    <div class="mx-auto w-[85%]">
    <div class="Welkomtext p-[50px]">

    <h1 class="text-center text-xl pr-[70px]">Hello user</h1>
    </div>
    <div id="container" class="grid grid-cols-2 grid-rows-2 gap-8 p-8 justify-items-center items-center">
        <div id="Txt" class="text-center w-[90%]">
            <h1 class="helloh1">loremp ipsum</h1>
            <p class="hellotxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, doloremque voluptatem sit quae aliquid nulla accusamus omnis repellat fuga inventore, nostrum, praesentium porro et velit molestiae. Accusamus, quod. Ad, dicta.</p>
        </div>

         <div id="ayay" class="">
         <h1 class="text-center">List of games</h1>
         <div id="color"class="bg-[#FFFFFF]">
         <table class="w-full table-fixed">
          <thead>
              <th class="text-center">game</th>
              <th class="text-center">game</th>
              <th class="text-center">game</th>
          </thead>
          <tbody>
            @foreach ($games as $game)
                  <tr>
                    <td class="">{{ $game->team1}}</td>
                  </tr>
            @endforeach
          </tbody>
      </table>
      </div>
      </div>

        <div class="img">
            <img src="{{ asset('images/images.jpg') }}" alt="images">
        </div>

        <div id="lol" class="bg-[#FFFFFF]">
        <table class="w-full table-fixed">
          <thead>
              <th class="text-center">game</th>
              <th class="text-center">game</th>
              <th class="text-center">game</th>
          </thead>
          <tbody>
            @foreach ($games as $game)
                  <tr>
                    <td class="">{{ $game->team1}}</td>
                    <td class="">{{ $game->team1_score}} - {{ $game->team2_score}}</td>
                    <td class="">{{ $game->team2}}</td>
                  </tr>
            @endforeach
          </tbody>
      </table>
      </div>






    </div>
    </main>
</body>
</html>
</x-layouts.app>
