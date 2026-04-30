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
    <div id="container" class="grid grid-cols-2 grid-rows-2 gap-[5px] justify-items-center items-center">
        <div id="Txt" class="text-center w-[90%]">
            <h1 class="helloh1">loremp ipsum</h1>
            <p class="hellotxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, doloremque voluptatem sit quae aliquid nulla accusamus omnis repellat fuga inventore, nostrum, praesentium porro et velit molestiae. Accusamus, quod. Ad, dicta.</p>
        </div>

         <div class="Tables">
            <h1 class="tablesh1">lorem</h1>
            <table>
            <thead>
                <tr>
                    <th>e</th>
                </tr>
            </thead>
            </table>
        </div>

        <div class="img">
            <img src="{{ asset('images/images.jpg') }}" alt="images">
        </div>





        <div class="list">
            <h1 class="listh1">loremp ipsum</h1>
        <ul>
            <li>ITEM</li>
        </ul>
        </div>

    </div>
    </div>
    </main>
</body>
</html>
</x-layouts.app>
