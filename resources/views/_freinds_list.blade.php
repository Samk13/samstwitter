<h3 class="font-serif">Freinds</h3>
<ul>
    @foreach (range(1,8) as $index)
        <li class="mb-4">
            <div class="flex items-center">
                <img class="rounded-full w-12 mr-2" src="https://avatars.dicebear.com/api/human/test.svg" alt="profile pic">
                <p class="text-sm">name {{ $index }}</p>
            </div>
        </li>
    @endforeach
</ul>
