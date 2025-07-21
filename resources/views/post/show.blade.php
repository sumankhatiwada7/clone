
<x-app-layout>
    <div class="py-6 bg-white mt-5 mx-auto w-[700px] shadow-md rounded-lg">
        <div class="max-w-3xl mx-auto px-6 space-y-6">

            <!-- Title Centered at Top -->
            <h1 class="text-4xl font-bold text-gray-800 text-center">
                {{ $post->title }}
            </h1>

            <!-- Avatar Below Title on Left Side -->
            <div class="flex items-center gap-4">
                @if ($post->user->image)
                    <img 
                        class="w-16 h-16 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" 
                        src="{{ Storage::url($post->user->image) }}" 
                        alt="User avatar">
                @else
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full dark:bg-gray-600">
                        <span class="text-lg font-medium text-gray-600 dark:text-gray-300">
                            {{ strtoupper(substr($post->user->name, 0, 2)) }}
                        </span>
                    </div>
                @endif

                <!-- Optional: Show user name or date here -->
                <div>
                    <!-- Username on top -->
                    <div class ="flex gap-2">
                    <p class="font-semibold text-gray-700">
                        {{ $post->user->name }}
                    </p>
                    &middot;
                    <a href="#" class="text-emerald-500">Follow</a>
                </div>
                
                    <!-- Min read and created date in one line -->
                    <div class="flex items-center gap-1 text-sm text-gray-500">
                        <p>{{ $post->readtime() }} min read</p>
                        <span>&middot;</span>
                        <p>{{ $post->created_at->format('F j, Y') }}</p>
                    </div>
                </div>
                
            </div>

        </div>
        <!-- clap Content -->
           <div class="mt-9 p-4 border-t border-b">
            <button class =" flex gap-2 text-black-500 hover:text-blue-700 ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                  </svg>
                  3.4k
                  
            </button>
           </div>
            
         <!-- clap Content -->
         <!--detailspost-->
         <div class="mt-6 space-y-4">
            <div>
            <img src="{{ Storage::url($post->image) }}" alt="Post Image" class="w-full rounded-md" />
            </div>
            <div>
            <p>{{$post->content}}</p>
            </div>
            <div class="mt-8">
                <p class="inline-block px-4 py-2 bg-sky-700 text-white rounded-lg">
                    {{ $post->category->name }}
                </p>
            </div>
            

         </div>
          <!--detailspost-->

    </div>
</x-app-layout>
