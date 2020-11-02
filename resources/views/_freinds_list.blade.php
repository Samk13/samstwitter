<div class="bg-gray-200 border py-4 px-6 rounded-xl">
    <h3 class="font-bold text-lg mb-4 block capitalize">Following</h3>
    <ul>
        @forelse(auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '':'mb-4' }}">
                <a class="flex items-center text-sm" href="{{ route('profile', $user) }}">
                    <img class="rounded-full w-8 mr-2" src="{{ $user->avatar }}" alt="profile pic">
                    <p class="text-sm">{{ $user->name }}</p>
                </a>
            </li>
            @empty
            <div>
                <p>No followers yet</p>
            </div>
        @endforelse
    </ul>
</div>
