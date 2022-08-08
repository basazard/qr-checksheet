<x-app-layout>
    <x-slot name="header">
        <x-header>Dashboard</x-header>
    </x-slot>

    <div class="py-12">

        {{-- Content --}}
        <div
            class="flex justify-center space-x-32 text-white text-sm font-bold leading-6 bg-stripes-blue rounded-lg mb-10">
            <a href="{{ route('compressor.index') }}" class="card w-96 bg-white shadow-md">
                <div class="card-body">
                    <h2 class="card-title text-gray-600">Compressor Atlas Copco</h2>
                    <p class="text-gray-400">Status : <span class="badge badge-lg badge-success">Checked</span></p>
                </div>
            </a>

            <a href="{{ route('dryer.index') }}" class="card w-96 bg-white shadow-md">
                <div class="card-body">
                    <h2 class="card-title text-gray-600">Dryer</h2>
                    <p class="text-gray-400">Status : <span class="badge badge-lg badge-error">Unchecked</span></p>
                </div>
            </a>
        </div>

        <div class="flex justify-center space-x-32 text-white text-sm font-bold leading-6 bg-stripes-blue rounded-lg">
            <a href="{{ route('nitrogen.index') }}" class="card w-96 bg-white shadow-md">
                <div class="card-body">
                    <h2 class="card-title text-gray-600">Nitrogen (N2)</h2>
                    <p class="text-gray-400">Status : <span class="badge badge-lg badge-error">Unchecked</span></p>
                </div>
            </a>

            <a href="{{ route('tangki.index') }}" class="card w-96 bg-white shadow-md">
                <div class="card-body">
                    <h2 class="card-title text-gray-600">Tangki Angin</h2>
                    <p class="text-gray-400">Status : <span class="badge badge-lg badge-success">Checked</span></p>
                </div>
            </a>
        </div>
    </div>
</x-app-layout>