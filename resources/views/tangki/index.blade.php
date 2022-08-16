<x-app-layout>
    <x-slot name="header">
        <x-header>Tangki Angin</x-header>
    </x-slot>

    <x-content>
        <x-head-content/>

        @if ($tangki->count())
        @foreach ($tangki as $item)
        <form action="{{ route('tangki.update', $item->id) }}" method="post">
        @endforeach
            @csrf
            @method('put')
            <div class="overflow-x-auto mb-4">
                <table class="table w-full display cell-border" id="indexTangki">
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
                        @foreach ($tangki as $item)
                        <tr>
                            <td>1</td>
                            <td>Kran Pembuangan Air Tangki 1</td>
                            <td>Tidak Ada Air</td>
                            <td><input type="text" value="{{ $item->KranPembuanganAirTangki1 }}" class="input input-bordered w-full max-w-xs" name="KranPembuanganAirTangki1"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks1 }}" class="input input-bordered w-full max-w-xs" name="remarks1"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tekanan Angin Tangki 1</td>
                            <td>0.6 ~ 0.9 kg/cm2</td>
                            <td><input type="text" value="{{ $item->TekananAnginTangki1 }}" class="input input-bordered w-full max-w-xs" name="TekananAnginTangki1"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks2 }}" class="input input-bordered w-full max-w-xs" name="remarks2"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tekanan Angin Tangki 2</td>
                            <td>0.6 ~ 0.8 kg/cm2</td>
                            <td><input type="text" value="{{ $item->TekananAnginTangki2 }}" class="input input-bordered w-full max-w-xs" name="TekananAnginTangki2"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks3 }}" class="input input-bordered w-full max-w-xs" name="remarks3"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tekanan Angin Tangki 3</td>
                            <td>0.5 ~ 0.8 kg/cm2</td>
                            <td><input type="text" value="{{ $item->TekananAnginTangki3 }}" class="input input-bordered w-full max-w-xs" name="TekananAnginTangki3"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks3 }}" class="input input-bordered w-full max-w-xs" name="remarks3"/>
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
        <form action="{{ route('tangki.store') }}" method="post">
            @csrf
            <div class="overflow-x-auto mb-4">
                <table class="table w-full display cell-border" id="indexTangki">
                    <input type="hidden" name="checker" value="{{ Auth()->user()->name }}">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th></th>
                            <th>Item</th>
                            <th>Standard</th>
                            <th>Current Condition</th>
                            <th>Remarks</th>
                            <th>Checked</th>
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
                                <input type="text" placeholder=". . ." class="input input-bordered w-full max-w-xs" />
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" required/></label>
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