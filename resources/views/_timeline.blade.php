<div class="border border-gray-300 rounded-xl p-5 mt-5">
    @foreach ($tweets as $tweet)
        @include('_tweet')
    @endforeach
</div>
