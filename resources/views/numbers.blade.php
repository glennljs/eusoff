<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Numbers
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 pb-14 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 mb-2 text-2xl">
                        List of Numbers
                    </div>
                    <div class="mb-4">
                        <span class="text-xl">Legend: </span>
                        <span class="text-red-600">Taken</span>
                        <span class="text-orange-300">Contested</span>
                        <span class="text-green-400">Available</span>
                    </div>
                    <div class="mb-2 text-xl">
                        Male
                    </div>
                    <div class="overflow-auto">
                        <table class="table-auto">
                            <tbody>
                                <tr>
                                @foreach ($numbers as $number)
                                    @if ($number->taken_male)
                                        <td class="border px-4 py-2 w-20 bg-red-600">
                                    @elseif ($number->maleBids->count() > 0)
                                        <td class="border px-4 py-2 w-20 bg-orange-300">
                                    @else
                                        <td class="border px-4 py-2 w-20 bg-green-400">
                                    @endif

                                    @if ($number->taken_female)
                                        {{ $number->id }}
                                    @elseif ($number->maleBids->count() > 0)
                                        <a href="/number/{{ $number->id }}/1">{{ $number->id }} ({{ $number->maleBids->count() }})</a>
                                    @else
                                        <a href="/number/{{ $number->id }}/1">{{ $number->id }}</a>
                                    @endif

                                    </td>
                                    @if ($loop->last)
                                        </tr>
                                    @elseif (($loop->index + 1) % 9 == 0)
                                        </tr><tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-2 mt-4 text-xl">
                        Female
                    </div>
                    <div class="overflow-auto">
                        <table class="table-auto">
                            <tbody>
                                <tr>
                                @foreach ($numbers as $number)
                                    @if ($number->taken)
                                        <td class="border px-4 py-2 w-20 bg-red-600">
                                    @elseif ($number->femaleBids->count() > 0)
                                        <td class="border px-4 py-2 w-20 bg-orange-300">
                                    @else
                                        <td class="border px-4 py-2 w-20 bg-green-400">
                                    @endif

                                    @if ($number->taken)
                                        {{ $number->id }}
                                    @elseif ($number->femaleBids->count() > 0)
                                        <a href="/number/{{ $number->id }}/0">{{ $number->id }} ({{ $number->femaleBids->count() }})</a>
                                    @else
                                        <a href="/number/{{ $number->id }}/0">{{ $number->id }}</a>
                                    @endif

                                    </td>
                                    @if ($loop->last)
                                        </tr>
                                    @elseif (($loop->index + 1) % 9 == 0)
                                        </tr><tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
