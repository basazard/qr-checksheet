<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Timeline') }}
        </h2>
    </x-slot>

    <x-content>
        <table id="tableTimeline" class="display" style="width:100%">
            <thead>
                <tr>
                    @foreach ($theadsCompressor as $thead)
                        <td>{{ $thead }}</td>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($compressor as $item)
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
                    @endforeach
                </tr>
            </tbody>
        </table>
    </x-content>

    @push('scripts')
    <script>
        $(document).ready(function () {
            $('#tableTimeline').DataTable({
                lengthChange: false,
                buttons: [ 'excel','pdf' ],
                "scrollY": "150px",
                "scrollX": true,
                dom: 'B<"clear">lfrtip',
            });

            table.buttons().container()
        .insertBefore( '#tableTimeline_filter' );
        });
    </script>
    @endpush
</x-app-layout>