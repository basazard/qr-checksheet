<x-app-layout>
    <x-slot name="header">
        <x-header>Dryer</x-header>
    </x-slot>

    <div class="">
        <h1 class="py-6 ml-12 text-lg semi-bold">Choose your Authorization</h1>
    </div>
    <div class="py-2 flex justify-center gap-x-10">
        @foreach ($authorizations as $authorization)
        <a href="{{ route('dryer.show', $authorization->slug) }}" class="w-40 block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $authorization->name }}</h5>
        </a>
        @endforeach
    </div>
</x-app-layout>