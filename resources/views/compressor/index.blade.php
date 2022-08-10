<x-app-layout>
    <x-slot name="header">
        <x-header>Compressor Atlas Copco</x-header>
    </x-slot>

    <x-content>
        <x-head-content/>

        @if ($compressor->count())
        @foreach ($compressor as $item)
        <form action="{{ route('compressor.update', $item->id) }}" method="post">
        @endforeach
            @csrf
            @method('put')
            <div class="overflow-x-auto mb-4">
                <table class="table w-full">
                    <input type="hidden" name="checker" value="{{ Auth()->user()->name }}">
                    <!-- head -->
                    <thead>
                        <tr>
                            @foreach ($theads as $thead)
                                <th>{{ $thead }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($items as $item => $standard)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item }}</td>
                            <td>{{ $standard }}</td>
                            <td>
                                <input type="text" value="{{ $standard }}" class="input input-bordered w-full max-w-xs" name="{{ str_replace(" ","",$item) }}"/>
                            </td>
                            <td>
                                <input type="text" placeholder=". . ." class="input input-bordered w-full max-w-xs" name="remarks{{ $loop->iteration }}"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex justify-center mb-4">
                <button class="btn btn-primary">Submit</button>
            </div>

        </form>
        @else
        <form action="{{ route('compressor.store') }}" method="post">
            @csrf
            <div class="overflow-x-auto mb-4">
                <table class="table w-full">
                    <input type="hidden" name="checker" value="{{ Auth()->user()->name }}">
                    <!-- head -->
                    <thead>
                        <tr>
                            @foreach ($theads as $thead)
                                <th>{{ $thead }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        @foreach ($items as $item => $standard)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item }}</td>
                            <td>{{ $standard }}</td>
                            <td>
                                <input type="text" value="{{ $standard }}" class="input input-bordered w-full max-w-xs" name="{{ str_replace(" ","",$item) }}"/>
                            </td>
                            <td>
                                <input type="text" placeholder=". . ." class="input input-bordered w-full max-w-xs" name="remarks{{ $loop->iteration }}"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" required /></label>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="flex justify-center mb-4">
                <button class="btn btn-primary">Submit</button>
            </div>

        </form>
        @endif
    </x-content>
</x-app-layout>