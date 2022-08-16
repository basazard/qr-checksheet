<x-app-layout>
    <x-slot name="header">
        <x-header>{{ __('Timeline') }}</x-header>
    </x-slot>

    <x-content>
      <div x-data="{ openTab: 1 }" class="p-6">
        <ul class="flex border-b">
          <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
            <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
              Compressor
            </a>
          </li>
          <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
            <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Dryer</a>
          </li>
          <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
            <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Nitrogen</a>
          </li>
          <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
            <a :class="openTab === 4 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Tangki</a>
          </li>
        </ul>
        <div class="w-full pt-4">
          <div x-show="openTab === 1">
            <x-table-compressor></x-table-compressor>
          </div>
          <div x-show="openTab === 2">
            <x-table-dryer></x-table-dryer>
          </div>
          <div x-show="openTab === 3">
            <x-table-nitrogen></x-table-nitrogen>
          </div>
          <div x-show="openTab === 4">
            <x-table-tangki></x-table-tangki>
          </div>
        </div>
      </div>
    </x-content>

    @push('scripts')
    <script>
        $(document).ready(function () {
            $('#tableCompressor').DataTable({
                lengthChange: true,
                buttons: [ 'excel','pdf' ],
                "scrollX": true,
                dom: 'B<"clear">lfrtip',
                paging: true,
                responsive: true,
            });
        });

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

        $(document).ready(function () {
            $('#tableNitrogen').DataTable({
              lengthChange: true,
                buttons: [ 'excel','pdf' ],
                "scrollX": true,
                dom: 'B<"clear">lfrtip',
                paging: true,
                responsive: true,
            });
        });

        $(document).ready(function () {
            $('#tableTangki').DataTable({
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