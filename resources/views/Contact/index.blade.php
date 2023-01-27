<x-guest-layout>

    <x-hero-section class="h-96 mt-0 ml-0 sm:-ml-28 pt-0 pl-3 sm:pl-0" style="background-image:url({{ asset('build/assets/img/technology.jpg') }})">
        <h1 class="ml-2 font-serif font-bold text-5xl sm:text-7xl text-white" style="text-shadow: 5px 7px 15px #333;">Contact Us</h1>
    </x-hero-section>

    <section class="mt-4 py-12 flex justify-center flex-wrap gap-2">
        <div class="mt-7">
            <img src="{{ asset('build/assets/img/contact-rep.png') }}" alt="Customer Service Graphic" width="350"/>
        </div>
        <div class="grow max-w-xl p-0">
        <form action="" method="post" class="mx-auto flex flex-col items-center pt-10">
            @csrf

            <x-text-input
                type="text"
                name="name"
                placeholder="Enter your name..."
                class="pl-4 placeholder:italic placeholder-gray-300 bg-neutral-700 rounded-md w-full sm:w-5/6 h-12 text-white shadow-xl mb-5"
            />

            <x-text-input
                type="email"
                name="email"
                placeholder="Enter your email..."
                class="pl-4 placeholder:italic placeholder-gray-300 bg-neutral-700 rounded-md w-full sm:w-5/6 h-12 text-white shadow-xl mb-5"
            />

            <x-text-input
                type="text"
                name="subject"
                id="subject"
                placeholder="Enter a subject..."
                class="pl-4 placeholder:italic placeholder-gray-300 bg-neutral-700 rounded-md w-full sm:w-5/6 h-12 text-white shadow-xl mb-5"
            />

            <x-text-area
                name="body"
                id="body"
                rows="10"
                field="text"
                placeholder="Start typing here..."
                :value="@old('body')"
                class="w-full mt-6 pl-4 placeholder:italic placeholder-gray-300 bg-neutral-700 rounded-md w-full sm:w-5/6 h-40 text-white shadow-xl mb-5"
            >

            </x-text-area>

            <x-primary-button class="mt-6 self-end sm:mr-12">Submit</x-primary-button>
        </form>
        </div>
    </section>
</x-guest-layout>
