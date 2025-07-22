<x-app-layout>
    <div class="py-8">
        <div class="max-w-5xl mx-auto px-4">
            <div class="p-4 bg-white shadow rounded-lg">

                <!-- Tight Two-Column Layout -->
                <div class="flex flex-col md:flex-row md:gap-6">

                    <!-- Left: Posts -->
                    <div class="md:w-[68%] w-full space-y-2">
                        <h1 class="text-xl font-bold text-gray-800">{{ $user->name }}'s Posts</h1>

                        @forelse($posts as $post)
                            <x-post-item :post="$post" />
                        @empty
                            <div class="py-6 text-gray-500 text-sm">No post found</div>
                        @endforelse

                        <div>
                            {{ $posts->links() }}
                        </div>
                    </div>

                    <!-- Right: Profile -->
                    <div class="md:w-[32%] w-full space-y-3">

                        <!-- Avatar -->
                        @if ($user->image)
                            <img src="{{ Storage::url($user->image) }}" class="w-20 h-20 rounded-full mx-auto" alt="User avatar">
                        @else
                            <div class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center mx-auto">
                                <span class="text-lg font-bold text-gray-600">
                                    {{ strtoupper(substr($user->name, 0, 2)) }}
                                </span>
                            </div>
                        @endif

                        <!-- Name -->
                        <h2 class="text-lg font-semibold text-center text-gray-800">{{ $user->name }}</h2>

                        <!-- Bio -->
                        <p class="text-sm text-center text-gray-600">
                            {{ $user->bio ?? 'No bio available.' }}
                        </p>

                        <!-- Follow Section -->
                        <div class="flex justify-center items-center gap-3 text-sm mt-2">
                            <div class="text-gray-700">
                                <span class="font-semibold">230</span> Followers
                            </div>

                            <button class="px-3 py-1 text-white bg-emerald-600 rounded hover:bg-emerald-700">
                                Follow
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
