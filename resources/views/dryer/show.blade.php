<x-app-layout>
    <x-slot name="header">
        <x-header>Dryer</x-header>
    </x-slot>

    <x-content>
        @if (request()->is('dryer/operator'))
        <x-head-content/>
        @if ($dryerToday->count())
        @foreach ($dryerToday as $item)
        <form action="{{ route('dryer.update', $item->id) }}" method="post">
        @endforeach
            @csrf
            @method('put')
            <div class="overflow-x-auto mb-4">
                <table class="table w-full display cell-border" id="indexDryer">
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
                        @foreach ($dryerToday as $item)
                        <tr>
                            <td>1</td>
                            <td>Humidity</td>
                            <td>Min -20%</td>
                            <td><input type="text" value="{{ $item->Humidity }}" class="input input-bordered w-full max-w-xs" name="Humidity"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks1 }}" class="input input-bordered w-full max-w-xs" name="remarks1"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Body Dryer</td>
                            <td>Bebas Debu</td>
                            <td><input type="text" value="{{ $item->BodyDryer }}" class="input input-bordered w-full max-w-xs" name="BodyDryer"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks2 }}" class="input input-bordered w-full max-w-xs" name="remarks2"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Indikator Filter In</td>
                            <td>Range Hijau</td>
                            <td><input type="text" value="{{ $item->IndikatorFilterIn }}" class="input input-bordered w-full max-w-xs" name="IndikatorFilterIn"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks3 }}" class="input input-bordered w-full max-w-xs" name="remarks3"/>
                            </td>
                            <td>
                                <label><input type="checkbox" class="checkbox" checked /></label>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Indikator Filter Out</td>
                            <td>Range Hijau</td>
                            <td><input type="text" value="{{ $item->IndikatorFilterOut }}" class="input input-bordered w-full max-w-xs" name="IndikatorFilterOut"/></td>
                            <td>
                                <input type="text" value="{{ $item->remarks4 }}" class="input input-bordered w-full max-w-xs" name="remarks4"/>
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
        <form action="{{ route('dryer.store') }}" method="post">
            @csrf
            <div class="overflow-x-auto mb-4">
                <table class="table w-full display cell-border" id="indexDryer">
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
                                    class="input input-bordered w-full max-w-xs"
                                    name="{{ str_replace(" ","",$item) }}"/>
                            </td>
                            <td>
                                <input type="text" placeholder=". . ." class="input input-bordered w-full max-w-xs" name="remarks{{ $loop->iteration }}"/>
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
        @else
            <x-table-dryer></x-table-dryer>
        @endif
    </x-content>

    
@push('scripts')
<script>
    $(document).ready(function () {
        $('#tableDryer').DataTable({
            lengthChange: true,
            buttons: [ 'excel','pdf' ],
            "scrollX": true,
            dom: 'B<"clear">lfrtip',
            paging: true,
            responsive: true,
        });
    });
</script>
@endpush
</x-app-layout>