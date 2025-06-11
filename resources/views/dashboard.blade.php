<x-app-layout>
    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Categories --}}
            <div class="bg-white shadow-sm sm:rounded-lg p-4">
                <ul class="flex flex-wrap justify-center gap-3 text-sm font-medium text-gray-600">
                    <li>
                        <a href="#" class="px-4 py-2 text-white bg-sky-600 rounded-lg">All</a>
                    </li>
                    @foreach($categories as $cat)
                        <li>
                            <a href="#" class="px-4 py-2 bg-gray-100 text-gray-800 rounded-lg hover:bg-sky-100 hover:text-sky-800">
                                {{ $cat->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Posts List --}}
            @foreach($posts as $post)
                <div class="flex flex-col sm:flex-row bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
                    <div class="flex-1 p-4">
                        <h5 class="text-lg font-bold text-gray-900 mb-2">{{ $post->title }}</h5>
                        <p class="text-sm text-gray-700 mb-4">
                            {{ Str::limit($post->content, 80) }}
                        </p>
                        <a href="#"
                           class="inline-flex items-center text-sm text-blue-700 hover:underline font-medium">
                            Read more
                            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                   
                        <img class="object-cover w-1p0 h-100" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Post Image">
                   
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
