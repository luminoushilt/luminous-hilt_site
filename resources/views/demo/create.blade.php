<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Demo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden mt-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('demo.store') }}" method="post" class="flex flex-col py-10 lg:px-8" enctype="multipart/form-data">
                    @csrf

                    <x-text-input
                        type="text"
                        name="title"
                        field="title"
                        placeholder="Enter Demo Project Title..."
                        :value="@old('title')"
                        class="pl-4 placeholder:italic placeholder-gray-400 bg-white rounded-md w-full h-12 text-gray-800 shadow-xl mb-5"
                        autocomplete="off"
                    ></x-text-input>
                    <x-text-input
                        type="text"
                        name="demo_link"
                        field="demo_link"
                        placeholder="Enter Demo Project URL..."
                        :value="@old('demo_link')"
                        class="pl-4 placeholder:italic placeholder-gray-400 bg-white rounded-md w-full h-12 text-gray-800 shadow-xl mb-5"
                        autocomplete="off"
                    ></x-text-input>
                    <x-text-input
                        type="file"
                        name="thumbnail"
                        field="thumbnail"
                        placeholder="Enter Demo Project Thumbnail path..."
                        :value="@old('thumbnail')"
                        class="pl-4 placeholder:italic placeholder-gray-400 bg-white rounded-md w-full h-12 text-gray-800 shadow-xl mb-5"
                        accept=".jpg, .png, .gif"
                    ></x-text-input>
                    <x-text-area
                        name="caption"
                        rows="10"
                        field="caption"
                        placeholder="Start typing here..."
                        :value="@old('caption')"
                        class="w-full mt-6 pl-4 placeholder:italic placeholder-gray-400 bg-white rounded-md w-full h-40 text-gray-800 shadow-xl mb-5"
                    >
                    </x-text-area>

                    <x-primary-button
                        class="mt-6 self-start"
                    >
                        Save Demo
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>