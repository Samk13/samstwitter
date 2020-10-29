<div class="flex p-4 {{ $loop->last ? '':'border-b border-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img class="rounded-full w-12 mr-2 " src="{{ $tweet->user->avatar }}" alt="profile pic">
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>
        </h5>
        <p class="text-sm">{{ $tweet->body }}</p>
    </div>
</div>
