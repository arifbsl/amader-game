<x-home-layout>
  <div class="container px-4 mx-auto divide-y divide-gray-700 space-y-14">
    {{-- Popular game --}}
    <section>
      <h2 class="mb-8 font-semibold text-green-200 uppercase">
        Popular games
      </h2>

      <div class="grid grid-cols-1 gap-8 md:grid-cols-3 sm:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6">
        @for ($i = 1; $i <= 18; $i++)
          <div class="game">
            <div class="relative inline-block">
              <a href="#">
                <img class="w-full transition duration-150 ease-in-out sm:w-64 hover:opacity-75" src="https://picsum.photos/650/300?random={{ $i }}" alt="">
              </a>
              <div class="absolute right-0 w-16 h-16 bg-gray-600 rounded-full -bottom-5 sm:-right-5">
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
    </section>
     {{-- End popular games --}}

    {{-- Recently Reviewed --}}
    <section class="pt-10">
      <div class="grid grid-cols-4 gap-y-8 lg:gap-x-20 gap-x-8">
        <div class="col-span-4 md:col-span-3">
          <h2 class="mb-8 font-semibold text-green-200 uppercase">
            Recently reviewed
          </h2>
          <div class="grid grid-cols-10 p-5 bg-gray-700 rounded-lg md:gap-x-14 gap-x-5">
            <div class="relative col-span-10 mb-3 md:col-span-2">
              <a href="#">
                <img class="transition duration-150 ease-in-out sm:w-64 hover:opacity-75" src="https://picsum.photos/650/300?random={{ $i }}" alt="">
              </a>
              <div class="absolute right-0 w-16 h-16 bg-gray-600 rounded-full -bottom-5 sm:-right-5">
                <span class="flex items-center justify-center h-full text-xs font-semibold">
                  80%
                </span>
              </div>
            </div>
            <div class="col-span-10 md:col-span-8">
              <a href="#" class="inline-block font-semibold leading-tight hover:text-gray-400">
                Amet consectetur adipisicing elit.
              </a>
  
              <div class="mt-1 text-gray-400">PSP4</div>
  
              <div class="break-all">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut alias molestias sunt nulla eligendi, esse dolorem incidunt eaque aut possimus est ex libero nam assumenda amet porro consectetur voluptatem nesciunt ullam, numquam corrupti similique iusto. Voluptatem temporibus, sunt totam magnam eligendi, voluptates maxime adipisci nulla harum laboriosam ipsum doloribus molestias veniam facilis.
              </div>
            </div>
  
          </div>
        </div>
        <div class="col-span-4 md:col-span-1">
          <h2 class="mb-8 font-semibold text-green-200 uppercase">
            Most Anticipated
          </h2>
          
          <div class="grid grid-cols-3 md:grid-cols-1 gap-x-5 gap-y-4">
            <div class="flex flex-col sm:flex-row gap-x-4">
              <a href="#">
                <img class="w-16 transition duration-150 ease-in-out hover:opacity-75" src="https://picsum.photos/200/300?random={{ $i }}" alt="">
              </a>
              <div>
                <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                <div class="mt-1 text-sm text-gray-400">
                  Sept 16, 2020
                </div>
              </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-x-4">
              <a href="#">
                <img class="w-16 transition duration-150 ease-in-out hover:opacity-75" src="https://picsum.photos/200/300?random={{ $i }}" alt="">
              </a>
              <div>
                <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                <div class="mt-1 text-sm text-gray-400">
                  Sept 16, 2020
                </div>
              </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-x-4">
              <a href="#">
                <img class="w-16 transition duration-150 ease-in-out hover:opacity-75" src="https://picsum.photos/200/300?random={{ $i }}" alt="">
              </a>
              <div>
                <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                <div class="mt-1 text-sm text-gray-400">
                  Sept 16, 2020
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</x-home-layout>
