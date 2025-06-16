<x-app-layout>
    <div class="py-6 bg-white mt-5 ">
        <div class="max-w-sm mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- title -->
            <div>
                <x-input-label for="title" :value="__('title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="title" name="title" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <!-- content -->
            <div>
                <x-input-label for="content" :value="__('content')" />
                <x-text-inputarea id="content" class="block mt-1 w-full" type="content" name="content" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>
        </div>
    </div>
</x-app-layout>
