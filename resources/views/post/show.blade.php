<x-app-layout>
    <div class="py-6 bg-white mt-5 w-400">
        <div class="max-w-sm mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1 class>{{ $post->title }} </h1>
            <div class="flex gap-4 items-center">
                @if ($post->user->image)
                <img class="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="{{ Storage::url($post->user->image) }}" alt="Bordered avatar">
                @else

                <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                    <span class="font-medium text-gray-600 dark:text-gray-300">JL</span>
                </div>


                @endif



            </div>
        </div>
</x-app-layout>
