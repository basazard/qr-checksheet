<x-app-layout>
    <x-slot name="header">
        <x-header>Dashboard</x-header>
    </x-slot>

    <div class="py-12">

        {{-- Content --}}
        <div
            class="flex justify-center space-x-12 text-white text-sm font-bold leading-6 bg-stripes-blue rounded-lg mb-10">
            <x-compressor></x-compressor>

            <x-dryer></x-dryer>
        </div>

        <div class="flex justify-center space-x-12 text-white text-sm font-bold leading-6 bg-stripes-blue rounded-lg">
            <x-nitrogen></x-nitrogen>

            <x-tangki></x-tangki>
        </div>
    </div>
</x-app-layout>