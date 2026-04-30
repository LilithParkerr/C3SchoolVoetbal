<x-layouts.app>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body class="bg-[#c2c5aa]">
      <main>
    <div class="mx-auto w-[85%]">
    <div class="Welkomtext p-[50px]">

    <h1 class="text-center text-xl pr-[70px] font-bold">Hello  {{ auth()->user()->name }}</h1>
    </div>
    <div id="container" class="grid grid-cols-2 grid-rows-2 gap-4 p-4 items-center">
        <div id="Txt" class="text-center w-[90%] ">
            <h1 class="font-bold">Info</h1>
            <p  class="font-light">Here are all the info about the games!</p>
        </div>

         <div id="ayay" class="">
         <h1 class="text-center font-bold">List of games</h1>
         <div id="color">
         <table class="w-full table-fixed">
          <thead class="bg-[#FFFFFF]">
              <th class="text-center">game</th>
              <th class="text-center">game</th>
              <th class="text-center">game</th>
          </thead>
          <tbody>
            @foreach ($games as $game)
                  <tr>
                     <tr>
                    <td>{{ $game->team1->name }}</td>
                    <td>{{ $game->team1_score }} - {{ $game->team2_score }}</td>
                    <td>{{ $game->team2->name }}</td>
                    </tr>
                  </tr>
            @endforeach
          </tbody>
      </table>
      </div>
      </div>

        <div class="img w-full place-items-center">
            <img src="{{ asset('images/images.jpg') }}" alt="images" class="w-[50%] h-auto">
        </div>

        <div id="lol">
        <table class="w-full table-fixed">
          <thead class="bg-[#FFFFFF]">
              <th class="text-center">game</th>
              <th class="text-center">game</th>
              <th class="text-center">game</th>
          </thead>
          <tbody>
            @foreach ($games as $game)
                <tr>
                <td>{{ $game->team1->name }}</td>
                <td>{{ $game->team1_score }} - {{ $game->team2_score }}</td>
                <td>{{ $game->team2->name }}</td>
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
