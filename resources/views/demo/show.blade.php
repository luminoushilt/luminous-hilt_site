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
            <a href="{{ route('demo.index') }}" class="inline-block mb-4 py-4 px-6 border border-solid border-gray-400 rounded-md text-orange-400 shadow shadow-gray-400" >
                <i class="fa-solid fa-chevron-left fa-2x"></i>
            </a>
            <div class="flex">
                <p class="opacity-70">
                    <strong>Created: </strong> {{ $demo->created_at->diffForHumans() }}
                </p>
                <p class="opacity-70 ml-8">
                    <strong>Updated at: </strong> {{ $demo->updated_at->diffForHumans() }}
                </p>
                <a href="{{ route('demo.edit', $demo) }}"
                   class="inline-block px-4 py-2 bg-orange-400 rounded-md font-bold text-sm text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:ring ring-orange-500 px-6 py-3 mb-2 ml-auto"
                >Edit Demo</a>
                <form action="{{ route('demo.destroy', $demo) }}" method="post">
                    @method('delete')
                    @csrf
                    <button
                        type="submit"
                        onclick="return confirm('Are you sure you wish to delete this demo?')"
                        class="inline-block px-4 py-2 bg-red-600 rounded-md font-bold text-sm text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 focus:ring ring-orange-500 px-6 py-3 mb-2 ml-4"
                    >
                        Delete Demo
                    </button>
                </form>
            </div>
            <div class="bg-white overflow-hidden mt-6 flex flex-wrap gap-2 shadow-sm sm:rounded-lg">
                <div class="my-8 mx-4 p-6 border border-gray-100 rounded-xl drop-shadow-xl shadow-gray-600 text-center text-gray-900">
                    <img class="block" src="{{ asset('/storage/' . $demo->thumbnail_path) }}" alt="{{ $demo->caption }}">
                    <p class="mt-4 text-2xl text-gray-600">{{ $demo->title }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
