<x-app-layout>
    <x-slot name="header">
        <x-header>Nitrogen (N2)</x-header>
    </x-slot>

    <x-content>
        <x-head-content/>

        @if ($nitrogen->count())
        @foreach ($nitrogen as $item)
        <form action="{{ route('nitrogen.update', $item->id) }}" method="post">
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
                        @foreach ($nitrogen as $item)
                        <tr>
                            <td>1</td>
                            <td>LCD Display</td>
                            <td>Nyala</td>
                            <td><input type="text" value="{{ $item->LCDDisplay }}" class="input input-bordered w-full max-w-xs" name="LCDDisplay"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks1 }}" class="input input-bordered w-full max-w-xs" name="remarks1"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Purity</td>
                            <td><= 100ppm</td>
                            <td><input type="text" value="{{ $item->Purity }}" class="input input-bordered w-full max-w-xs" name="Purity"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks2 }}" class="input input-bordered w-full max-w-xs" name="remarks2"/>
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
                <button class="btn btn-primary">Update</button>
            </div>

        </form>
        @else
        <form action="{{ route('nitrogen.store') }}" method="post">
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
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $item }}</td>
                            <td>{{ $standard }}</td>
                            <td>
                                <input type="text" value="{{ $standard }}"
                                    class="input input-bordered w-full max-w-xs" name="{{ str_replace(" ","",$item) }}"/>
                            </td>
                            <td>
                                <input type="text" placeholder=". . ." class="input input-bordered w-full max-w-xs" name="remarks{{ $loop->iteration }}" />
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