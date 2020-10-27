<div class="flex p-4 border-b border-gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img class="rounded-full w-12 mr-2 " src="{{ $tweet->user->avatar }}" alt="profile pic">
        </div>
        <div>
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
            <p>{{ $tweet->body }}</p>
        </a>
    </div>
</div>
