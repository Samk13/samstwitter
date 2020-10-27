<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block capitalize">Home</a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block capitalize">Explore</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block capitalize">Notifications</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block capitalize">Messages</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block capitalize">Bookmarks</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block capitalize">Lists</a>
    </li>
    <li>
        <a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 block capitalize">Profile</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block capitalize">More</a>
    </li>
</ul>
