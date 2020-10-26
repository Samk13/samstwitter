@extends('layouts.app')

@section('content')
<div class="lg:flex lg:justify-between">
    <div class="lg:w-auto">
        @include('_sidebar_links')
    </div>
    <div class="flex-1 lg:mx-10">
        @include('_publish-tweet-panel')
        <div class="border border-gray-300 rounded-xl p-5 mt-5">
            @include('_tweet')
            @include('_tweet')
            @include('_tweet')
            @include('_tweet')
        </div>
    </div>
    <div class="lg:w-auto bg-blue-200 p-5 rounded-xl">
        @include('_freinds_list')
    </div>
</div>
@endsection
