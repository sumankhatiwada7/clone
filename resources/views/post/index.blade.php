<x-app-layout>
    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Categories --}}
            <div class="bg-white shadow-sm sm:rounded-lg p-4">
                <ul class="flex flex-wrap justify-center gap-3 text-sm font-medium text-gray-600">
                    <li>
                        <a href="#" class="px-4 py-2 text-black bg-yellow-600 rounded-lg">All</a>
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
            @forelse($posts as $post)
            <x-post-item :post="$post"></x-post-item>

            @empty
            <div class="py-8"> no post found</div>
            @endforelse
            {{$posts->links()}}

        </div>
    </div>
</x-app-layout>