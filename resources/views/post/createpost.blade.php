<x-app-layout>
    <div class="py-6 bg-white mt-5 w-400">
        <div class="max-w-sm mx-auto sm:px-6 lg:px-8 space-y-6">
           @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded">
        <ul>
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">

                @csrf

                <!-- Image Upload -->
                <div>
                    <label for="file_input">Upload file</label>
                    <input id="file_input" name="file" type="file" required>
                    <x-input-error :messages="$errors->get('file')" class="mt-2" />
                </div>

                <!-- Title -->
                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" :value="old('title')" required class="block mt-1 w-full" />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <!-- Categories -->
                <div>
                    <x-input-label for="categories" :value="__('Categories')" />
                    <select id="categories" name="categories" required class="block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="">Select category</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('categories')" class="mt-2" />
                </div>

                <!-- Content -->
                <div>
                    <x-input-label for="content" :value="__('Content')" />
                    <textarea id="content" name="content" required class="block mt-1 w-full">{{ old('content') }}</textarea>
                    <x-input-error :messages="$errors->get('content')" class="mt-2" />
                </div>

                <!-- Submit -->
                <x-primary-button class="mt-4">Submit</x-primary-button>
            </form>
            @if(session('success'))
    <div class="bg-green-100 text-green-700 p-4 rounded">
        {{ session('success') }}
    </div>
@endif


           
          

        </div>
    </div>
</x-app-layout>
