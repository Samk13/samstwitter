<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>
            <input type="text" class="border border-gray-400 p-2 w-full rounded-xl"
            name="name"
            id="name"
            value="{{ $user->name }}"
            required
            >
            @error('name')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                User Name
            </label>
            <input type="text" class="border border-gray-400 p-2 w-full rounded-xl"
            name="username"
            id="username"
            value="{{ $user->username }}"
            required
            >
            @error('username')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Avatar
            </label>

            <div class="flex bg-grey-100 my-3">
                <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
                    <input
                        value="{{ $user->avatar }}"
                        class="hidden"
                        name="avatar"
                        type='file'
                        id="avatar"
                    />
                    <img src="{{ $user->avatar }}" alt="avatar preview" class="w-32 rounded-full py-2">
                    <span class="flex space-x-3">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal">Select a file</span>
                    </span>
                </label>
            </div>
            @error('avatar')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>
            <input type="text" class="border border-gray-400 p-2 w-full rounded-xl"
            name="email"
            id="email"
            value="{{ $user->email }}"
            required
            >
            @error('email')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>
            <input type="password" class="border border-gray-400 p-2 w-full rounded-xl"
            name="password"
            id="password"
            required
            >
            @error('password')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password confirmation
            </label>
            <input type="password" class="border border-gray-400 p-2 w-full rounded-xl"
            name="password_confirmation"
            id="password_confirmation"
            required
            >
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-blue-400 text-white rounded-xl py-2 px-4 hover:bg-blue-500">Submit</button>
            <a href="{{ $user->path() }}" class="border text-black rounded-xl ml-2 py-2 px-4">Cancel</a>
        </div>
    </form>
</x-app>
