<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Traslations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-fixed">
                        <tr>
                            <th>
                                Target Word
                            </th>
                            <th>
                                Translation 1
                            </th>
                            <th>
                                Translation 2
                            </th>
                            <th>
                                Delete
                            </th>
                        </tr>
                        @if ($translations->count() > 0)
                        @foreach($translations as $translation)
                        <tr>
                            <td>
                                {{ $translation->target }}
                            </td>
                            <td>
                                {{ $translation->source }}
                            </td>
                            <td>
                                {{ $translation->source_extra }}
                            </td>
                            <td>
                                <x-dropdown-link
                                    :href="route('translations.destroy', $translation)"
                                    data-turbo-method="delete"
                                    data-turbo-confirm="Do you really want to delete?"
                                >
                                    {{ __('Delete') }}
                                </x-dropdown-link>

                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
