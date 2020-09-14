<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Number
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 pb-14 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 mb-6 text-2xl">
                        Details for Number {{ $number->id }}
                    </div>
                    <div>
                        @if ($number->taken)
                        <p class="text-2xl text-red-600">Number is taken!!!</p>
                        @else
                            @if ($number->bids->count() == 0)
                                <p class="text-2xl text-green-500">Number is currently available. No one has bid for it yet!</p>
                            @else
                                @foreach ($number->bids as $bid)
                                    <p>{{ $bid->user->name }} ({{ $bid->user->points }} points) bid for this as rank {{ $bid->priority }}.</p>
                                @endforeach
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
