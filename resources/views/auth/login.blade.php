@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex justify-center">
        <div class="flex-col w-full md:w-1/2">
            <div class="bg-blue-400 p-5 rounded-xl shadow ">
                <div class="py-4 font-serif text-xl">{{ __('Login') }}</div>

                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-col">
                            <label for="email" class="font-thin">{{ __('E-Mail Address') }}</label>

                            <div class="flex flex-col">
                                <input id="email" type="email" class="p-2 text-md rounded-xl focus:outline-white @error('email') border border-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="text-red-700 font-thin" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-col mt-4">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="flex flex-col">
                                <input id="password" type="password" class="p-2 text-md rounded-xl focus:outline-white @error('password')border border-red-700 @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="text-red-700 font-thin" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex flex-col">
                                <div class="items-center mb-auto mt-3">
                                    <input class="w-3 h-3" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="font-thin text-xs self-center select-none" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <div class="flex justify-between mt-5">
                                <button type="submit" class="px-5 py-2 rounded-xl shadow font-bold capitalize hover:text-white hover:bg-blue-600 flex-1">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class=" hover:text-white self-end ml-5" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
