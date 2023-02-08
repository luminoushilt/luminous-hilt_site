<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Demo List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>

            <a href="{{ route('demo.create') }}"
               class="inline-block px-4 py-2 bg-orange-400 rounded-md font-bold text-sm text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:ring ring-orange-500 px-6 py-3 mb-2"
            >+ New Demo</a>
            <div class="bg-white overflow-hidden mt-6 flex flex-wrap gap-2 shadow-sm sm:rounded-lg">

                @forelse($demos as $demo)
                    <div class="sm:w-1/4 my-8 mx-4 p-6 border border-gray-100 rounded-xl drop-shadow-xl shadow-gray-600 text-center text-gray-900">
                        <a href="{{ route('demo.show', $demo) }}">
                            <img class="block w-full h-48" src="{{ asset('/storage/' . $demo->thumbnail_path) }}" alt="{{ $demo->caption }}">
                            <p class="mt-4 text-xl text-gray-600">{{ $demo->title }}</p>
                        </a>
                    </div>
                @empty
                    <p>You have no demos yet.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
