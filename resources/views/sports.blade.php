<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sports
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 pb-14 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 mb-6 text-2xl">
                        List of Sports
                    </div>
                    <div class="grid grid-cols-3 gap-1">
                        <div>
                            <h1 class="text-xl mb-2">Male</h1>
                            @foreach ($sports as $sport)
                                @if ($sport->gender == "male")
                                    <a href="/sport/{{ $sport->id }}"><p class="text-blue-600 mb-2">{{ $sport->name }}</p></a>
                                @endif
                            @endforeach
                        </div>
                        <div>
                            <h1 class="text-xl mb-2">Female</h1>
                            @foreach ($sports as $sport)
                                @if ($sport->gender == "female")
                                    <a href="/sport/{{ $sport->id }}"><p class="text-blue-600 mb-2">{{ $sport->name }}</p></a>
                                @endif
                            @endforeach
                        </div>
                        <div>
                            <h1 class="text-xl mb-2">Mixed</h1>
                            @foreach ($sports as $sport)
                                @if ($sport->gender == "mixed")
                                    <a href="/sport/{{ $sport->id }}"><p class="text-blue-600 mb-2">{{ $sport->name }}</p></a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
