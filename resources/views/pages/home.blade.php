<x-home-layout>
  <div class="container px-4 mx-auto">
    <h2 class="font-semibold text-green-200 uppercase">
      Popular games
    </h2>

    <div class="grid grid-cols-6 gap-3">
      @for ($i = 1; $i <= 18; $i++)
        <div class="mt-8 game">
          <div class="relative inline-block">
            <a href="#">
              <img class="transition duration-150 ease-in-out hover:opacity-75" src="https://picsum.photos/200/300?random={{ $i }}" alt="">
            </a>
            <div class="absolute w-16 h-16 bg-gray-600 rounded-full -bottom-5 -right-5">
              <div class="flex items-center justify-center h-full text-xs font-semibold">
                80%
              </div>
            </div>
          </div>
          <a href="#" class="inline-block mt-5 font-semibold leading-tight hover:text-gray-400">
            Amet consectetur adipisicing elit.
          </a>

          <div class="mt-1 text-gray-400">PSP4</div>

        </div>
      @endfor
    </div>
  </div>
</x-home-layout>
