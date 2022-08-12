<x-content>
    <table id="tableCompressor" class="display" style="width:100%">
        <thead>
            <tr>
                @foreach ($theadsCompressor as $thead)
                    <td>{{ $thead }}</td>
                @endforeach
            </tr>
        </thead>
        <tbody>
                @foreach ($compressor as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>{{ $item->LCDDisplay }}</td>
                    <td>{{ $item->remarks1 }}</td>
                    <td>{{ $item->EmergencyButton }}</td>
                    <td>{{ $item->remarks2 }}</td>
                    <td>{{ $item->LoadingPressure }}</td>
                    <td>{{ $item->remarks3 }}</td>
                    <td>{{ $item->TemperatureMesin }}</td>
                    <td>{{ $item->remarks4 }}</td>
                    <td>{{ $item->TemperatureOil }}</td>
                    <td>{{ $item->remarks5 }}</td>
                    <td>{{ $item->PressureOil }}</td>
                    <td>{{ $item->remarks6 }}</td>
                    <td>{{ $item->BodyCompressor }}</td>
                    <td>{{ $item->remarks7 }}</td>
                    <td>{{ $item->TempLPElement }}</td>
                    <td>{{ $item->remarks8 }}</td>
                    <td>{{ $item->TempLPElement }}</td>
                    <td>{{ $item->remarks9 }}</td>
                    <td>{{ $item->checker }}</td>
                </tr>
                @endforeach
            
        </tbody>
    </table>  
</x-content>