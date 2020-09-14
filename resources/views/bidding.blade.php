
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bidding
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 pb-14 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 mb-6 text-2xl">
                        Bidding Submission
                    </div>
                    @if ($user->biddingRound() == $currentRound)
                        @livewire('bidding-form')
                    @elseif ($currentRound == 0)
                        <p>Jersey bidding has not started!!</p>
                    @elseif ($user->biddingRound() < $currentRound)
                        <p>Sorry your round has ended already.</p>
                    @else
                        <p>It is not your round yet! The current round is {{ $currentRound }}.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>