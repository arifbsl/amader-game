<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Amader Video Games</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="text-white bg-gray-900">
  <header class="border-b border-gray-700">
    <nav class="container flex flex-col items-center justify-between px-4 py-6 mx-auto lg:flex-row">
      <div class="flex flex-col items-center lg:flex-row gap-x-14">
        <a href="/" class="text-2xl font-medium tracking-wide" title="আমাদের গেম">
          <span class="uppercase font-brand">
            Amader
          </span>
          <span class="font-bold text-yellow-300 font-brand-lowercase">Game</span>
        </a>

        <ul class="flex gap-x-8">
          <li>
            <a href="#" class="hover:text-gray-400">Games</a>
          </li>
          <li>
            <a href="#" class="hover:text-gray-400">Reviews</a>
          </li>
          <li>
            <a href="#" class="hover:text-gray-400">Coming Soon</a>
          </li>
        </ul>

      </div>

      <div class="flex items-center mt-4 lg:mt-0 gap-x-8">
        <div class="relative">
          <input type="text" class="pl-9 pr-3 py-1.5 bg-gray-800 rounded-full focus:outline-none" placeholder="Search">
          <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-2 w-6 h-6 top-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
        <a href="#">
          <img class="rounded-full w-9 ring-1 ring-white ring-offset-1" src="https://picsum.photos/200" alt="">
        </a>
      </div>


    </nav>
  </header>

  <main class="py-8">
    {{ $slot }}
  </main>

  <footer class="border-t border-gray-700">
    <div class="container px-4 py-6 mx-auto">
      Powered by <a href="#" class="text-3xl text-green-500 font-brand-lowercase">arif</a>
    </div>
  </footer>
</body>

</html>
