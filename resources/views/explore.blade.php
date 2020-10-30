<x-app>
    <h1 class="text-xl font-serif p-5">Explore</h1>
    <div>
        @foreach ($users as $user)
        <a href="{{ $user->path() }}" class="flex items-center py-5">
            <img
                src="{{ $user->avatar }}"
                alt="{{ $user->name }}"
                class="w-32 rounded-full mr-4"
            />
            <div class="font-bold">{{ '@'. $user->name }}</div>
        </a>
        <hr>
        @endforeach
    </div>
</x-app>

