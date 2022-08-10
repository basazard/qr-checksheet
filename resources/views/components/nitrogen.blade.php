<a href="{{ route('nitrogen.index') }}" class="card w-2/5 bg-base-100 shadow-md">
    <div class="card-body">
      <div class="flex items-center justify-between">
        <div class="flex flex-col">
          <h2 class="card-title text-gray-600 text-2xl font-bold">Nitrogen (N2)</h2>
          
          @if ($nitrogen->count())
        @foreach ($nitrogen as $item)
        <h2 class="card-title text-gray-400 text-xs font-thin">Checker :
          <span class="text-black font-light font-mono">{{ $item->checker }}</span>
        </h2>
      </div>

      <div class="flex flex-col">
        <p class="text-gray-400 font-thin">Status : <span
            class="text-white font-light font-mono badge badge-lg badge-success">Checked</span></p>
        <p class="text-gray-400 font-thin">On : <span class="text-black font-light font-mono">{{
           $item->created_at }}</span> </p>
      </div>
      @endforeach
      @else
      <h2 class="card-title text-gray-400 text-xs font-thin">Checker :
        <span class="text-black font-light font-mono">-</span>
      </h2>
    </div>

    <div class="flex flex-col">
      <p class="text-gray-400 font-thin">Status : <span
          class="text-white font-light font-mono badge badge-lg badge-error">Unchecked</span></p>
      <p class="text-gray-400 font-thin">On : <span class="text-black font-light font-mono">-</span> </p>
    </div>
      @endif
    </div>
  </div>
</a>