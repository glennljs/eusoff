<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profile
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 pb-14 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 mb-6 text-2xl">
                        Profile of {{ $user->username }}
                    </div>
                    <div>
                        <p>{{ $gender_object }} bidding round is: {{ $user->biddingRound() }}</p>
                        @if (isset($user->captainOf))
                            <a href="/sport/{{ $user->captainOf->id }}">You are the captain of <span class="text-blue-600">{{ $user->captainOf->name }}</span>.</a>
                        @endif 
                        <p>The number of points {{ strtolower($gender_subject) }} has is {{ $user->points }}</p>
                        <p>{{ $gender_subject }} is in these sports: 
                            @foreach ($user->sports as $sport)
                                <a class="text-blue-700" href="/sport/{{ $sport->id }}">{{ $sport->name }}</a>, 
                            @endforeach
                        </p>
                        @if ($user->bids->count() > 0)
                            <p>{{ $gender_subject }} bid for the following numbers: 
                                @foreach ($user->bids as $bid)
                                    {{ $bid->number_id }},
                                @endforeach
                            </p>
                        @else
                            <p>You have yet to bid for your numbers</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>