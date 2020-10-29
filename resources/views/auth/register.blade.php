<x-master>
    <div class="container">
        <div class="flex justify-center">
            <div class="flex flex-col w-full">
                <div class="bg-blue-400 p-5 rounded-xl shadow">
                    <div class="font-serif text-xl capitalize pb-3">{{ __('Register') }}</div>

                    <div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="flex flex-col">
                                <label for="name" class="font-thin">{{ __('Name') }}</label>

                                <div class="flex flex-col">
                                    <input id="name" type="text" class="p-2 text-md rounded-xl focus:outline-white @error('name') border border-red-700 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="text-red-500 font-thin text-xs" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label for="username" class="font-thin">{{ __('User name') }}</label>
                                <div class="flex flex-col">
                                    <input id="username" type="text" class="p-2 text-md rounded-xl focus:outline-white @error('username') border border-red-700 @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="text-red-500 font-thin text-xs" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <label for="email" class="font-thin">{{ __('E-Mail Address') }}</label>

                                <div class="flex flex-col">
                                    <input id="email" type="email" class="p-2 text-md rounded-xl focus:outline-white @error('email') border border-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="text-red-500 font-thin text-xs" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="flex flex-col">
                                    <input id="password" type="password" class="p-2 text-md rounded-xl focus:outline-white @error('password') border border-red-700 @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="text-red-500 font-thin text-xs" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="flex flex-col">
                                    <input id="password-confirm" type="password" class="p-2 text-md rounded-xl focus:outline-white" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <div class="flex flex-col">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
