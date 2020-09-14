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
                    <div class="mt-8 mb-6 text-2xl">
                        List of Numbers
                    </div>
                    <div class="overflow-auto">
                        <table class="table-auto">
                            <tbody>
                                <tr>
                                @foreach ($numbers as $number)
                                    @if ($number->taken)
                                        <td class="border px-4 py-2 bg-red-600">
                                    @elseif ($number->bids->count() > 0)
                                        <td class="border px-4 py-2 bg-orange-300">
                                    @else
                                        <td class="border px-4 py-2">
                                    @endif

                                    @if ($number->taken)
                                        {{ $number->id }}
                                    @elseif ($number->bids->count() > 0)
                                        <a href="/number/{{ $number->id }}">{{ $number->id }} ({{ $number->bids->count() }})</a>
                                    @else
                                        <a href="/number/{{ $number->id }}">{{ $number->id }}</a>
                                    @endif

                                    </td>
                                    @if ($loop->last)
                                        </tr>
                                    @elseif (($loop->index + 1) % 5 == 0)
                                        </tr><tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="overflow-auto">
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Number</th>
                                    <th class="px-4 py-2">Rank 1</th>
                                    <th class="px-4 py-2">Rank 2</th>
                                    <th class="px-4 py-2">Rank 3</th>
                                    <th class="px-4 py-2">Rank 4</th>
                                    <th class="px-4 py-2">Rank 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($numbers as $number)
                                    <tr>
                                        @if ($number->taken)
                                            <td class="border px-4 py-2 bg-red-500">
                                        @else
                                            <td class="border px-4 py-2">
                                        @endif
                                            {{ $number->id }}
                                        </td>
                                        <td class="border px-4 py-2">
                                            @foreach ($number->rank1users()->orderBy('points', 'desc')->get() as $r1u)
                                                {{ $r1u->name }} ({{ $r1u->points }}),
                                            @endforeach
                                        </td>
                                        <td class="border px-4 py-2">
                                            @foreach ($number->rank2users()->orderBy('points', 'desc')->get() as $r2u)
                                                {{ $r2u->name }} ({{ $r2u->points }}),
                                            @endforeach
                                        </td>
                                        <td class="border px-4 py-2">
                                            @foreach ($number->rank3users()->orderBy('points', 'desc')->get() as $r3u)
                                                {{ $r3u->name }} ({{ $r3u->points }}),
                                            @endforeach
                                        </td>
                                        <td class="border px-4 py-2">
                                            @foreach ($number->rank4users()->orderBy('points', 'desc')->get() as $r4u)
                                                {{ $r4u->name }} ({{ $r4u->points }}),
                                            @endforeach
                                        </td>
                                        <td class="border px-4 py-2">
                                            @foreach ($number->rank5users()->orderBy('points', 'desc')->get() as $r5u)
                                                {{ $r5u->name }} ({{ $r5u->points }}),
                                            @endforeach
                                        </td>
                                    </tr>   
                                @endforeach
                            </tbody>
                        </table>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
