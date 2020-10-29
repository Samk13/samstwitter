<div class="border border-gray-300 rounded-xl p-5 mt-5">
    @forelse ($tweets as $tweet)
        @include('_tweet')
    @empty
    <div>
        <p>No tweets yet 😀, do somthing about it, YALLA!</p>
    </div>
    @endforelse
</div>
