<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Eusoff Jersey Bidding
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 pb-14 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 mb-6 text-2xl">
                        Profile
                    </div>
                    <div>
                        <div class="grid grid-cols-3 mb-5">
                            <div>
                                <h1 class="text-xl font-bold">Room Number:</h1>
                                <p>{{ $user->username }}</p>
                            </div>
                            <div>
                                <h1 class="text-xl font-bold">Bidding Round:</h1>
                                <p>{{ $user->biddingRound() }}</p>
                            </div>
                            <div>
                                <h1 class="text-xl font-bold">Total Points:</h1>
                                <p>{{ $user->points }}</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 mb-5">
                            <div>
                                <h1 class="text-xl font-bold">Sports:</h1>
                                @foreach ($user->sports as $sport)
                                    <a class="text-blue-700" href="/sport/{{ $sport->id }}">{{ $sport->name }}</a>, 
                                @endforeach
                            </div>
                            <div>
                                @if ($user->taken)
                                    <h1 class="text-xl font-bold">Allocated Number:</h1>
                                    <p>{{ $user->allocated_number }}</p>
                                @elseif ($user->hasBids())
                                    <h1 class="text-xl font-bold">Bids:</h1>
                                    <p>
                                        @foreach ($user->bids as $bid)
                                            {{ $bid->number_id }}
                                            @if (!$loop->last)
                                                |
                                            @endif
                                        @endforeach
                                    </p>
                                @else
                                    <h1 class="text-xl font-bold">No bids made!!</h1>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
