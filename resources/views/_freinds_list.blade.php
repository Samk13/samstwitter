<h3 class="font-serif">Following</h3>
<ul>
    @foreach (auth()->user()->follows as $user)
        <li class="mb-4">
            <a class="flex items-center" href="{{ route('profile', $user) }}">
                <img class="rounded-full w-12 mr-2" src="{{ $user->avatar }}" alt="profile pic">
                {{-- <img class="rounded-full w-12 mr-2" src="https://avatars.dicebear.com/api/avataaars/{{ $user->id }}.svg" alt="profile pic"> --}}
                <p class="text-sm">{{ $user->name }}</p>
            </a>
        </li>
    @endforeach
</ul>
