<h3 class="font-serif">Following</h3>
<ul>
    @forelse(auth()->user()->follows as $user)
        <li class="mb-4">
            <a class="flex items-center" href="{{ route('profile', $user) }}">
                <img class="rounded-full w-12 mr-2" src="{{ $user->avatar }}" alt="profile pic">
                <p class="text-sm">{{ $user->name }}</p>
            </a>
        </li>
        @empty
        <div>
            <p>No followers yet</p>
        </div>
    @endforelse
</ul>
