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
                <table class="table w-full display cell-border" id="indexCompressor">
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
                        @foreach ($compressor as $item)
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
                            <td>Emergency Button</td>
                            <td>Tidak ditekan</td>
                            <td><input type="text" value="{{ $item->EmergencyButton }}" class="input input-bordered w-full max-w-xs" name="EmergencyButton"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks2 }}" class="input input-bordered w-full max-w-xs" name="remarks2"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Loading Pressure</td>
                            <td>0.6 ~ 0.8 kg/cm2</td>
                            <td><input type="text" value="{{ $item->LoadingPressure }}" class="input input-bordered w-full max-w-xs" name="LoadingPressure"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks3 }}" class="input input-bordered w-full max-w-xs" name="remarks3"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Temperature Mesin</td>
                            <td>< 65°C</td>
                            <td><input type="text" value="{{ $item->TemperatureMesin }}" class="input input-bordered w-full max-w-xs" name="TemperatureMesin"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks4 }}" class="input input-bordered w-full max-w-xs" name="remarks4"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Temperature Oil</td>
                            <td>< 65°C</td>
                            <td><input type="text" value="{{ $item->TemperatureOil }}" class="input input-bordered w-full max-w-xs" name="TemperatureOil"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks5 }}" class="input input-bordered w-full max-w-xs" name="remarks5"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Pressure Oil</td>
                            <td>> 1.6 bar</td>
                            <td><input type="text" value="{{ $item->PressureOil }}" class="input input-bordered w-full max-w-xs" name="PressureOil"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks6 }}" class="input input-bordered w-full max-w-xs" name="remarks6"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Body Compressor</td>
                            <td>Bebas Debu</td>
                            <td><input type="text" value="{{ $item->BodyCompressor }}" class="input input-bordered w-full max-w-xs" name="BodyCompressor"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks7 }}" class="input input-bordered w-full max-w-xs" name="remarks7"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Temp LP Element</td>
                            <td>< 200°C</td>
                            <td><input type="text" value="{{ $item->TempLPElement }}" class="input input-bordered w-full max-w-xs" name="TempLPElement"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks8 }}" class="input input-bordered w-full max-w-xs" name="remarks8"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Temp HP Element</td>
                            <td>< 200°C</td>
                            <td><input type="text" value="{{ $item->TempHPElement }}" class="input input-bordered w-full max-w-xs" name="TempLPElement"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks9 }}" class="input input-bordered w-full max-w-xs" name="remarks9"/>
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
        <form action="{{ route('compressor.store') }}" method="post">
            @csrf
            <div class="overflow-x-auto mb-4">
                <table class="table w-full display cell-border" id="indexCompressor">
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