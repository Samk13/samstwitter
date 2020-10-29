<form method="POST" action="/profiles/{{ $user->name }}/follow">
    @csrf
    <button type="submit" href="#" class="bg-blue-500 rounded-full text-sm shadow-md py-3 px-5 text-white">
        {{ auth()->user()->following($user) ? 'Unfollow me': 'Follow me' }}
    </button>
</form>
