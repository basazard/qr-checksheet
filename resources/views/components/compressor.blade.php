<a href="{{ route('compressor.index') }}" class="card w-2/5 bg-base-100 shadow-md">
  <div class="card-body p-6 lg:p-6">
    <div class="flex lg:items-center space-x-8 lg:justify-between">
      <div class="flex flex-col">
        <h2 class="card-title text-gray-600 font-bold text-sm sm:text-md md:text-lg lg:text-2xl">Compressor</h2>
        
        @if ($compressor->count())
        @foreach ($compressor as $item)
        <h2 class="card-title text-gray-400 font-thin text-xs sm:text-sm md:text-md lg:text-lg">Checker:</h2>
        <span class="text-black font-light font-mono text-xs sm:text-sm md:text-md lg:text-lg">{{ $item->checker }}</span>
      </div>

      <div class="flex flex-col">
        <p class="text-gray-400 font-thin text-xs sm:text-sm md:text-md lg:text-lg">Status : <span
            class="text-white font-light font-mono text-xs sm:text-sm md:text-md lg:text-lg badge badge-xs lg:badge-lg badge-success">Checked</span></p>
        <p class="text-gray-400 font-thin text-xs md:text-sm">On : <span class="text-black font-light font-mono text-xs md:text-sm">{{
           $item->created_at }}</span> </p>
      </div>
      @endforeach
      @else
      <h2 class="card-title text-gray-400 font-thin text-xs sm:text-sm md:text-md lg:text-lg">Checker :</h2>
      <span class="text-black font-light font-mono text-xs sm:text-sm md:text-md lg:text-lg">-</span>
    </div>

    <div class="flex flex-col">
      <p class="text-gray-400 font-thin text-xs sm:text-sm md:text-md lg:text-lg">Status : <span
          class="text-white font-light font-mono text-xs sm:text-sm md:text-md lg:text-lg badge badge-xs lg:badge-lg badge-error">Unchecked</span></p>
      <p class="text-gray-400 font-thin text-xs sm:text-sm md:text-md lg:text-lg">On : <span class="text-black font-light font-mono text-xs sm:text-sm md:text-md lg:text-lg">-</span> </p>
    </div>
      @endif
    </div>
  </div>
</a>
