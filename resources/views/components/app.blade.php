<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="flex justify-between">
                @if (auth()->check())
                    <div class="lg:w-auto">
                        @include('_sidebar_links')
                    </div>
                @endif
                <div class="flex-1 lg:mx-10">
                    {{ $slot }}
                </div>
                <div>
                    @include('_freinds_list')
                </div>
            </div>
        </main>
    </section>
</x-master>
