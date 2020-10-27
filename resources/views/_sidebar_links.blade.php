<ul>
    <li>
        <a href="{{ route('home') }}" class="font-serif text-lg mb-4 block capitalize">Home</a>
    </li>
    <li>
        <a href="/explore" class="font-serif text-lg mb-4 block capitalize">Exxplore</a>
    </li>
    <li>
        <a href="#" class="font-serif text-lg mb-4 block capitalize">Notifications</a>
    </li>
    <li>
        <a href="#" class="font-serif text-lg mb-4 block capitalize">Messages</a>
    </li>
    <li>
        <a href="#" class="font-serif text-lg mb-4 block capitalize">Bookmarks</a>
    </li>
    <li>
        <a href="#" class="font-serif text-lg mb-4 block capitalize">Lists</a>
    </li>
    <li>
        <a href="{{ route('profile', auth()->user()) }}" class="font-serif text-lg mb-4 block capitalize">Profile</a>
    </li>
    <li>
        <a href="#" class="font-serif text-lg mb-4 block capitalize">More</a>
    </li>
</ul>
