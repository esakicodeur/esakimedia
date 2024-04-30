<article class="bg-white p-4 shadow-sm rounded-sm">
    <a href="#" class="overflow-hidden block">
        <img src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}" class="w-full h-60 object-cover rounded transform hover:scale-110 transition duration-500">
    </a>
    <div class="mt-3">
        <a href="#">
            <h2 class="text-md font-semibold text-gray-700 font-roboto hover:text-blue-500 transition">
                {{ $post->title }}
            </h2>
        </a>
        <div class="flex mt-2 space-x-5 justify-between">
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
</article>
