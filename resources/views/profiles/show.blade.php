@extends('layouts.app')

@section('content')
    <header class="relative">
        <img src="/assets/imgs/Skärmbild 2020-10-27 013038.png"
            alt="profile pic"
            class="rounded-xl shadow-md mb-2"
        >
        <div class="flex justify-between items-center relative">
            <div class="">
                <div class="text-xl font-bold capitalize">{{ $user->name }}</div>
                <div class="text-xs font-thin">joined {{ $user->created_at->diffForHumans() }}</div>
            </div>
            <div>
                <a href="#" class="border rounded-full text-sm shadow-md py-3 px-5 text-black mr-2">Edit Profile</a>
                <a href="#" class="bg-blue-500 rounded-full text-sm shadow-md py-3 px-5 text-white">Follow</a>
            </div>
            <a href="" class="absolute bottom-0 transform -translate-x-1/2 translate-y-1/3"
            style="left: 50%;">
            <img class="rounded-full w-32 mr-2 shadow" src="{{ $user->avatar }}" alt="profile pic">
            </a>
        </div>
        <p class="mt-5 text-xs font-hairline">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae delectus, illo perspiciatis beatae sed voluptatum eligendi magnam adipisci labore, ipsam, ullam dicta autem id repellendus tenetur accusantium assumenda! Ullam, corporis fugit. Fugit sequi deserunt a consequuntur ipsam, dignissimos provident tenetur quos repellat magnam minima nam distinctio magni dicta numquam sed culpa nobis, aliquam facilis rerum porro, ad reprehenderit voluptatibus! Possimus repellat amet saepe unde doloremque vel tempora impedit dolorum, quod ipsum ratione, vero odio adipisci totam velit nihil deserunt. Iusto ut sequi architecto officiis asperiores maxime dolorem earum, laudantium atque quo ullam. Cupiditate facere facilis saepe consequuntur atque aliquam nisi!
        </p>
    </header>
    @include('_timeline',[
        'tweets' => $user->tweets
    ])
@endsection
