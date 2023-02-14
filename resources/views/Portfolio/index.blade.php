<x-guest-layout>
    <x-hero-section class="h-96 -mt-4 sm:mt-0 ml-0 sm:-ml-28 pt-0 pl-0" style="background-image:url({{ asset('build/assets/img/work_setup_portfolio.jpg') }})">
        <h1 class="text-6xl sm:text-7xl font-serif font-bold text-white" style="text-shadow: 5px 7px 15px #333;">Portfolio</h1>
    </x-hero-section>
    <section class="mt-4 py-16 pl-7 pr-3">
        <h2 class="text-4xl sm:text-5xl font-serif text-orange-400 underline">Technical Skills</h2>
        <div class="mt-4 py6">
            <h4 class="text-2xl sm:text-3xl font-serif text-orange-400">Platforms/O.S. <strong>:</strong></h4>
            <p class="sm:text-2xl sm:indent-8">Windows 7, 10, 11, Server 2008, Server 2012, Server 2016, Server 2019, Mac OS, Mac OS Server, Ubuntu</p>
        </div>
        <div class="mt-4 py6">
            <h4 class="text-2xl sm:text-3xl font-serif text-orange-400">Languages <strong>:</strong></h4>
            <p class="sm:text-2xl sm:indent-8">HTML 5, CSS 3, Javascript, PHP</p>
        </div>
        <div class="mt-4 py6">
            <h4 class="text-2xl sm:text-3xl font-serif text-orange-400">Applications/Tools <strong>:</strong></h4>
            <p class="sm:text-2xl sm:indent-8">Pug, Sass, Bootstrap, Bulma, TailwindCSS, jQuery, VueJs, WordPress, Laravel, Visual Studio Code, Php Storm, Gulp, Vite, Webpack, Git, Control Panel, FileZilla, Ansible, MySQL</p>
        </div>
    </section>
    <section class="mt-4 py-16 pl-7 pr-3">
        <h2 class="text-4xl sm:text-5xl font-serif text-orange-400 underline">Work Demos</h2>
        <div class="flex flex-col flex-wrap sm:flex-row">
            @forelse($demos as $demo)
                <div class="sm:w-1/5 my-8 mx-4 p-6 border border-gray-200 rounded-xl drop-shadow-xl shadow-gray-800 text-center text-gray-900">
                    <a href="{{ $demo->demo_link }}" target="_blank">
                        <img class="block w-full sm:h-48" src="{{ asset('/storage/' . $demo->thumbnail_path) }}" alt="{{ $demo->caption }}">
                        <p class="mt-4 place-self-end text-xl text-gray-600">{{ $demo->title }}</p>
                    </a>
                </div>
            @empty
                <p>You have no demos yet.</p>
            @endforelse
            <div class="sm:w-1/5 my-8 mx-4 p-6 border border-gray-200 rounded-xl drop-shadow-xl shadow-gray-800 text-center text-gray-900">
                <a href="{{ $demo->demo_link }}" target="_blank">
                    <img class="block w-40 sm:w-full h-52 sm:h-48 mx-auto" src="{{ asset('build/assets/img/luminous-hilt-logo.png') }}" alt="More Projects and Demos coming soon">
                    <p class="mt-4 place-self-end text-xl text-gray-600">Coming Soon...</p>
                </a>
            </div>
        </div>
        {{ $demos->links() }}
    </section>
</x-guest-layout>
