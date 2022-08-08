<x-app-layout>
    <x-slot name="header">
        <x-header>Compressor Atlas Copco</x-header>
    </x-slot>

    <x-content>
        <x-head-content/>

        <form action="{{ route('compressor.store') }}" method="post">
            <div class="overflow-x-auto mb-4">
                <table class="table w-full">
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
                                    class="input input-bordered w-full max-w-xs" name="{{ $item }}" />
                            </td>
                            <td>
                                <input type="text" placeholder=". . ." class="input input-bordered w-full max-w-xs" />
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
    </x-content>
</x-app-layout>