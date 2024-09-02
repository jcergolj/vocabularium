<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                     <form method="POST" action="{{ route('translations.store') }}">
        @csrf

        <div>
            <x-input-label for="source" :value="__('Source')" />
            <x-text-input class="block mt-1 w-full" type="text" name="source" :value="old('source')" required autofocus autocomplete="source" />
            <x-input-error :messages="$errors->get('source')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="source_extra" :value="__('Source Extra')" />
            <x-text-input class="block mt-1 w-full" type="text" name="source_extra" :value="old('source_extra')" autofocus autocomplete="source_extra" />
            <x-input-error :messages="$errors->get('source_extra')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="target" :value="__('Target')" />
            <x-text-input class="block mt-1 w-full" type="text" name="target" :value="old('target')" required autocomplete="target" />
            <x-input-error :messages="$errors->get('target')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
