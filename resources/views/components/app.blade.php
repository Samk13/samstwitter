<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @if (auth()->check())
                    <div class="lg:w-auto">
                        @include('_sidebar_links')
                    </div>
                @endif
                <div class="flex-1 lg:mx-10">
                    {{ $slot }}
                </div>
                <div class="lg:w-auto bg-blue-200 p-5 rounded-xl">
                    @include('_freinds_list')
                </div>
            </div>
        </main>
    </section>
</x-master>
