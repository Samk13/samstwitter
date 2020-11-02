<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block capitalize">Home</a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block capitalize">Explore</a>
    </li>
    <li>
        <a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 block capitalize">Profile</a>
    </li>
    <li>
        <form action="/logout" method="POST">
            @csrf
            <button class="font-bold text-lg mb-4 block capitalize">Logout</button>
        </form>
    </li>
</ul>
