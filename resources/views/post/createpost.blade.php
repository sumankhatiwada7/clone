<x-app-layout>
    <div class="py-6 bg-white mt-5 w-400 ">
        <div class="max-w-sm mx-auto sm:px-6 lg:px-8 space-y-6">
            @csrf
            <!-- image -->
            <div>

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

            </div>
            <!-- title -->
            <div>
                <x-input-label for="title" :value="__('title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="title" name="title" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <!-- categories-->
            <div>
                <x-input-label for="categories" :value="__('Categories')" />

                <select >
                    <option >Select categories</option>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>

                <x-input-error :messages="$errors->get('categories')" class="mt-2" />
            </div>



            <!-- content -->
            <div>
                <x-input-label for="content" :value="__('content')" />
                <x-text-inputarea id="content" class="block mt-1 w-full" type="content" name="content" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>
            <x-primary-button>
                submit
            </x-primary-button>
        </div>

    </div>
</x-app-layout>
