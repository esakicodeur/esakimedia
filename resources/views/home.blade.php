<x-app-layout>
    <div class="xl:w-6/12 lg:w-8/12 w-full lg:mx-6">
        <div class="flex justify-between bg-white px-3 py-2 items-center rounded-sm mb-4">
            <h5 class="text-base uppercase font-semibold font-roboto">Business</h5>
            <a href="#" class="text-white bg-blue-500 px-3 py-1 rounded-sm uppercase text-sm hover:bg-transparent hover:text-blue-500 transition border border-blue-500">see more</a>
        </div>

        @foreach ($lastpost as $post)
            <div class="bg-white shadow-sm rounded-sm">
                <a href="view.html" class="overflow-hidden block">
                    <img src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}" class="w-full h-96 object-cover rounded transform hover:scale-110 transition duration-500">
                </a>
                <div class="p-4">
                    <a href="#">
                        <h2 class="text-2xl font-semibold text-gray-700 font-roboto hover:text-blue-500 transition">
                            {{ $post->title }}
                        </h2>
                    </a>
                    <p class="text-gray-500 text-sm mt-2">
                        {{ $post->shortBody() }}
                    </p>
                    <div class="flex mt-1 space-x-5 justify-between">
                        <div class="flex items-center text-gray-400 text-sm">
                            <span class="mr-2 text-xs">
                            <i class="far fa-user"></i>
                            </span>
                            {{ $post->user->name }}
                        </div>
                        <div class="flex items-center text-gray-400 text-sm">
                            <span class="mr-2 text-xs">
                            <i class="far fa-clock"></i>
                            </span>
                            {{ $post->getFormattedDate() }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="grid md:grid-cols-2 grid-cols-1 gap-4 mt-4">
            @foreach ($posts as $post)
                <x-post-item :post="$post"></x-post-item>
            @endforeach
        </div>

        <div class="flex items-center justify-center mx-auto py-8">
            {{ $posts->onEachSide(1)->links() }}
        </div>
    </div>
</x-app-layout>
