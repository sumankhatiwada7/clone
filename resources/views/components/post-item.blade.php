<div class="flex flex-col sm:flex-row bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
    <div class="flex-1 p-4 flex flex-col justify-between">
        <div>
            <h5 class="text-lg font-bold text-gray-900 mb-2">{{ $post->title }}</h5>
            <p class="text-sm text-gray-700 mb-4">
                {{ Str::limit($post->content, 80) }}
            </p>
        </div>
        <a href="#"
           class="inline-flex items-center text-sm text-blue-700 hover:underline font-medium mt-2">
            <x-primary-button>
                Readmore
            </x-primary-button>
            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
    <img class="object-cover w-48 h-48 sm:h-auto sm:w-48" src="{{ Storage::url($post->image) }}" alt="Post Image">
</div>