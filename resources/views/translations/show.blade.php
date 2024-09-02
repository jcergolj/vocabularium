<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Traslations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    @if ($translation !== null)
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $translation->source }}</h2>
                        <br>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $translation->target }}</h2>
                        <br>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $translation->source_extra }}</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('keydown', function(event) {
    if (event.code === 'Space' || event.code === 'Enter') {
        location.reload();
    }
});
</script>
</x-app-layout>
