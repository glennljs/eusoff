<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sport
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 pb-14 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 mb-6 text-2xl">
                        {{ $sport->name }} ({{ $sport->gender }})
                    </div>
                    <div>
                        <p>
                            The players in this sport are:
                            <ul class="list-decimal">
                                @foreach ($sport->users as $player)
                                    @if ($player->allocated_number != null)
                                        <li class="text-sm">
                                            <a href="/profile/{{ $player->id }}" class="text-blue-600">{{ $player->name }} </a>
                                            has bid for and received number {{ $player->allocated_number }}.
                                        </li>
                                    @else
                                        <li class="text-sm">
                                            <a href="/profile/{{ $player->id }}" class="text-blue-600">
                                                {{ $player->name }} 
                                                @if ($sport->captain_id == $player->id)
                                                    (C)
                                                @endif
                                            </a>
                                            @if ($player->bids->count() > 0)
                                                bidded for 
                                                @for ($i = 1; $i <= $player->bids->count(); $i++)
                                                    {{ $player->bids->where('priority', $i)->first()->number_id }}
                                                    @if ($i < $player->bids->count())
                                                        |
                                                    @endif 
                                                @endfor
                                            @else 
                                                has not bid currently
                                            @endif
                                        </li>
                                    @endif
                                @endforeach
                            </ol>     
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
