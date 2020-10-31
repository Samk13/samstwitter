<div class="border border-blue-500 rounded-2xl px-8 py-4">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
            name="body"
            placeholder="What's in your mind?"
            class="w-full h-20"
            >

        </textarea>
        <hr class="my-5">
        <footer class="flex items-center justify-between">
            <button
                type="submit"
                class="bg-blue-500 rounded-xl px-5 py-2 text-white shadow"
            >
                tweet
            </button>
            <img class="rounded-full w-12 mr-2" src="{{ auth()->user()->avatar }}" alt="profile pic">
        </footer>
        <div>
            @error('body')
                <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
            @enderror
        </div>
    </form>
</div>
